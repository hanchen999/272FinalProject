<?php
	
class communication
{
	protected $connect;
	 function __construct() { 
	 	require_once('database_config.php');
	 	require_once('order.php');
	 	require_once('product.php');
	 	require_once('user.php');
	 	require_once('cart.php');
	 	$this->connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	}

	 function showOrderHistory($username) {
		$result = mysqli_query($this->connect, "SELECT * FROM cmpe272FinalProject.market_order WHERE username = '$username'");
		$orders = array();
		while($row = mysqli_fetch_assoc($result)){
 	     $product_ids = $row['product_ids'];
 	     $price = $row['cost'];
 	     $quantity = $row['quantity'];
 	     $orders[] = new order($username, $product_ids, $price, $quantity);
 	   }
 	    return $orders;
	}

	function showCart($username) {
		$result = mysqli_query($this->connect, "SELECT * FROM cmpe272FinalProject.market_cart WHERE username = '$username'");
		$product_ids = array();
		$quantity = array();
		while($row = mysqli_fetch_assoc($result)){
			$product_ids[] = $row['product_id'];
			$quantity[] = $row['quantity'];
		}
		$cart = new cart($username, $product_ids, $quantity);
		return $cart;
	}

	function addToCart($username, $product_id) {
		$result = mysqli_query($this->connect, "SELECT * From cmpe272FinalProject.market_cart a WHERE a.product_id = '$product_id' and a.username = '$username'");
		if (mysqli_num_rows($result) == 0) {
			mysqli_query($this->connect,"INSERT INTO cmpe272FinalProject.market_cart(username,product_id,quantity)
				VALUES('$username','$product_id',1)");
		} else {
			mysqli_query($this->connect,"UPDATE cmpe272FinalProject.market_cart SET quantity = quantity + 1 WHERE product_id='$product_id' AND username = '$username'");
		}
	}

	 function showProducts($product_id) {
	 	$products = array();
	 	if ($product_id == null) {
		$result = mysqli_query($this->connect, "SELECT a.product_id as product_id, a.price as price, a.picture as picture, a.visited as visited, AVG(b.rate) as rate FROM cmpe272FinalProject.market_product a LEFT JOIN cmpe272FinalProject.market_rate b ON a.product_id = b.product_id WHERE b.rate IS NOT NULL GROUP BY a.product_id, a.picture, a.visited, a.price");
		 while($row = mysqli_fetch_assoc($result)){
        $temp = new product($row['product_id'], $row['price'], $row['visited'], $row['picture'], $row['rate'], 'null');
        $product_id = $row['product_id'];
        $comments = mysqli_query($this->connect, "SELECT b.comment as comment From cmpe272FinalProject.market_rate b where b.product_id = '$product_id' and b.comment IS NOT NULL ORDER BY b.id DESC LIMIT 3");
        $comment = array();
        while ($records = mysqli_fetch_assoc($comments)) {
           $comment[] = $records['comment'];
        }
        $temp->comment = $comment;
        $products[] = $temp;
      }
    } else {
    	$result = mysqli_query($this->connect, "SELECT a.product_id as product_id, a.price as price, a.picture as picture, a.visited as visited, AVG(b.rate) as rate FROM cmpe272FinalProject.market_product a LEFT JOIN cmpe272FinalProject.market_rate b ON a.product_id = b.product_id WHERE a.product_id = '$product_id' AND b.rate IS NOT NULL GROUP BY a.product_id, a.picture, a.visited, a.price");
    	$row = mysqli_fetch_assoc($result);
    	$temp = new product($row['product_id'], $row['price'], $row['visited'], $row['picture'], $row['visited'], 'null');
        $product_id = $row['product_id'];
        $comments = mysqli_query($this->connect, "SELECT b.comment as comment From cmpe272FinalProject.market_rate b where b.product_id = '$product_id' and b.comment IS NOT NULL ORDER BY b.id DESC LIMIT 3");
        $comment = array();
        while ($records = mysqli_fetch_assoc($comments)) {
           $comment[] = $records['comment'];
        }
        $temp->comment = $comment;
        $products[] = $temp;

    }
        return $products;
	}
	
	 function setOrder($username){
        $result = mysqli_query($this->connect, "SELECT GROUP_CONCAT(a.product_id) as product_ids, GROUP_CONCAT(a.quantity) as quantity, SUM(b.price * a.quantity) as price FROM cmpe272FinalProject.market_cart a LEFT JOIN cmpe272FinalProject.market_product b ON a.product_id = b.product_id AND a.username = '$username' GROUP BY a.username");
       $orders = array();
       $flag = false;
         $row = mysqli_fetch_assoc($result);
 	     $product_ids = $row['product_ids'];
 	     $price = $row['price'];
 	     $quantity = $row['quantity'];
 	     $flag = mysqli_query($this->connect, "INSERT INTO cmpe272FinalProject.market_order(username,product_ids,quantity,cost)
				VALUES('$username','$product_ids','$quantity','$price')");
 	    $orders[] = new order($username, $product_ids, $price, $quantity);
 	    if ($flag) {
 	     mysqli_query($this->connect, "DELETE FROM cmpe272FinalProject.market_cart  WHERE username = '$username'");
           }
        $sent_order=array(array(), array(), array(), array(), array(), array());

        $product_ids = explode(",", $product_ids);
        $quantity_list = explode(",", $quantity);
        $pair = array_combine($product_ids, $quantity_list);
        foreach($pair as $key => $value) {
        	$number = substr($key, 0, 1);
        	$number = intval($number);
        	$sent_order[$number][$key] = $value;
        }

        echo json_encode($sent_order);
        echo "\n";
        for ($i = 0; $i < 6; ++$i) {
        	if (empty($sent_order[$i])) {
        		continue;
        	}
        	else {
        		 $quantity = array();
        		 $product_ids = array();
        		 $price = 0;
        		 foreach($sent_order[$i] as $key => $value) {
        		 	$product_ids[] = $key;
        		 	$quantity[] = $value;
        		 	$result = mysqli_query($this->connect, "SELECT price FROM cmpe272FinalProject.market_product WHERE product_id = '$key'");
        		 	$row = mysqli_fetch_assoc($result);
        		 	$price += $row['price'] * $value;
        		 }
        		//step2, prepare the $data;
		        $data = array(
			    "username"	=> $username,
			    "product_ids" => implode(",", $product_ids),
			    "quantity" => implode(",", $quantity),
			    "price"	=> $price
		       );

		        echo json_encode($data); // for tesy
		        echo "\n";  // for test
		//step3, tell this new user to the individual website
		//$this->sendRequestToIndividualWebsite($i + 1,"setOrder",$data)
        	}
        }
        return $orders[0];
	}

	public function setRate($data){
		$product_id = $data["product_id"];
		$username = $data["username"];
		$rate = $data["rate"];
		$comment = $data["comment"];
		
		$SQL = "Insert into cmpe272FinalProject.market_rate(username,product_id,rate,comment)
				VALUES('$username','$product_id',$rate,'$comment')";
		mysqli_query($this->conn, $SQL);
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

	public function setVisit($product_id){
		$product_id = $data["product_id"];
		$SQL = "UPDATE market_product SET visited = visited + 1 WHERE product_id='$product_id'";
		mysqli_query($this->conn, $SQL);
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