<?php
 require_once('database.php');
$return = $_POST;
$product_id = $return['product_id'];
$username = $return['username'];
$rate = $return['rate'];
$comment = $return['comment'];
mysqli_query($connect, "INSERT INTO cmpe272FinalProject.market_rate(username,product_id,rate,comment) VALUES('$username','$product_id',$rate,'$comment')");
		$data = array(
			"username"	=> $username,
			"product_id" => $product_id,
			"rate" => $rate,
			"comment" => $comment
		);
$number = substr($product_id, 0, 1);
$number = intval($number) + 1;
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
			"type" => 'setRate',
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
?>