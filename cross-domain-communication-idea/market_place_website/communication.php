<?php
	
class communication
{
	protected $connect;
	 function __construct() { 
	 	require('database_config.php');
	 	require('order.php');
	 	require('product.php');
	 	require('user.php');
	 	$this->connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	}

	 function showOrderHistory($username) {
		$result = mysqli_query($this->connect, "SELECT * FROM cmpe272FinalProject.market_order WHERE username = '$username'");
		$orders = array();
		while($row = mysqli_fetch_assoc($result)){
 	     $product_ids = $row['product_ids'];
 	     $price = $row['cost'];
 	     $orders[] = new order($username, $product_ids, $price);
 	   }
 	    echo json_encode($orders);
	}

	 function showProducts() {
		$result = mysqli_query($this->connect, "SELECT a.product_id as product_id, a.price as price, a.picture as picture, a.url as url, a.visited as visited, AVG(b.rate) as rate FROM cmpe272FinalProject.market_product a LEFT JOIN cmpe272FinalProject.market_rate b ON a.product_id = b.product_id AND b.rate IS NOT NULL GROUP BY a.product_id, a.picture, a.url, a.visited, a.price");
		$products = array();
		 while($row = mysqli_fetch_assoc($result)){
        $temp = new product($row['product_id'], $row['price'], $row['visited'], $row['url'], $row['picture'], $row['visited'], 'null');
        $product_id = $row['product_id'];
        $comments = mysqli_query($this->connect, "SELECT b.comment as comment From cmpe272FinalProject.market_rate b where b.product_id = '$product_id' and b.comment IS NOT NULL ORDER BY b.id DESC LIMIT 3");
        $comment = array();
        while ($records = mysqli_fetch_assoc($comments)) {
           $comment[] = $records['comment'];
        }
        $temp->comment = $comment;
        $products[] = $temp;
      }
      echo json_encode($products);
	}
	
	 function setOrder($username){
        $result = mysqli_query($this->connect, "SELECT GROUP_CONCAT(a.product_id) as product_ids, SUM(b.price) as price FROM cmpe272FinalProject.market_cart a LEFT JOIN cmpe272FinalProject.market_product b ON a.product_id = b.product_id AND a.username = '$username' GROUP BY a.username");
       $orders = array();
       while($row = mysqli_fetch_assoc($result)){
 	     $product_ids = $row['product_ids'];
 	     $price = $row['price'];
 	     $flag = mysqli_query($this->connect, "INSERT INTO cmpe272FinalProject.market_order(username,product_ids,cost)
				VALUES('$username','$product_ids','$price')");
 	    $orders[] = new order($username, $product_ids, $price);
 	    if ($flag) {
 	     mysqli_query($this->connect, "DELETE FROM cmpe272FinalProject.market_cart  WHERE username = '$username'");
           }
        }

        $sent_order=array(array(), array(), array(), array(), array(), array());

        $product_ids = explode(",", $orders[0]->product_ids);

        foreach($product_ids as $product_id) {
        	$number = substr($product_id, 0, 1);
        	$number = intval($number);
        	$sent_order[$number][] = $product_id;
        }

        echo json_encode($sent_order);
        echo "\n";
        for ($i = 0; $i < 5; ++$i) {
        	if (empty($sent_order[$i])) {
        		continue;
        	}
        	else {
        		$list = null;
        		if (sizeof($sent_order[$i]) > 1) {
        		   $list = implode(',', $sent_order[$i]);
        		echo $list;
        		echo "\n";
        		echo "SELECT SUM(b.price) as price FROM cmpe272FinalProject.market_product b WHERE b.product_id in ($list)";
        		$result = mysqli_query($this->connect, "SELECT SUM(b.price) as price FROM cmpe272FinalProject.market_product b WHERE b.product_id in ($list)");
        		$list = $sent_order[$i];
        	    } else {
        	    	$list = $sent_order[$i][0];
        	    	echo $list;
        		    echo "\n";
        		    $result = mysqli_query($this->connect, "SELECT b.price as price FROM cmpe272FinalProject.market_product b WHERE b.product_id = '$list'");
        	    }
        		$row = mysqli_fetch_assoc($result);
        		$price = $row['price'];
        		//step2, prepare the $data;
		        $data = array(
			    "username"	=> $username,
			    "product_ids" => $list,
			    "price"	=> $price
		       );
		        echo json_encode($data);
		
		//step3, tell this new user to the individual website
		//$this->sendRequestToIndividualWebsite($i + 1,"setOrder",$data)
        	}
        }
        echo json_encode($orders[0]);
	}
	
	 function CreateUser($username, $password, $email, $phone){
		//step1, save user to market-place database
		//mysqlxxx
		$result = mysqli_query($this->connect,"SELECT * FROM cmpe272FinalProject.market_user WHERE username = '$username'");
		if (mysqli_num_rows($result) > 0) {
			echo 'have existed';
		}
		$result = mysqli_query($this->connect,"INSERT INTO cmpe272FinalProject.market_user(username,password,email,phone)
				VALUES('$username','$password','$email','$phone')");
		//step2, prepare the $data;
		$data = array(
			"name"	=> $name,
			"email"	=> $email,
			"password" => $password,
			"phone"	=> $phone
		);

		$user = new user($username, $password, $email, $phone);
		
		//step3, tell this new user to all websites
	//	for($i=1;$i<=6;$i++){
	//		$this->sendRequestToIndividualWebsite($i,"setUser",$data)
	//	}
		echo json_encode($user);
	}

	 function Login($username, $password){
		$result = mysqli_query($this->connect,"SELECT * FROM cmpe272FinalProject.market_user WHERE username = '$username' AND password = '$password'");
		if (mysqli_num_rows($result) > 0) {
			return 'success';
		}
		return 'No Match';
	}
	
	//this function is the only curl function, which will be reused in all cross-domain communication.
	function sendRequestToIndividualWebsite($storeID,$type,$data){
		if($storeID==1){
			$domain = "";
		} else if ($storeID==2){
			$domain = "";
		} else if ($storeID==3){
			$domain = "";
		} else if ($storeID==4){
			$domain = "";
		} else if ($storeID==5){
			$domain = "";
		} else if ($storeID==6){
			$domain = "";
		}
		$parameters = array(
			"type" => $type,
			"data" => $data
		);
		$curl1 = curl_init();
		curl_setopt($curl1, CURLOPT_POST, 1);
		curl_setopt($curl1, CURLOPT_URL, $domain."/request.php");  
		curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl1, CURLOPT_POSTFIELDS, $parameters);
		$result1 = curl_exec($curl1);
		curl_close($curl1);
		return $result1;
	}
}

?>