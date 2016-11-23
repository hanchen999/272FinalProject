<?php
 require_once('database.php');
$return = $_POST;
$username = $return['username'];
$product_id = $return['product_id'];
$rate = $return['rate'];
$comment = $return['comment'];

if (!$rate) {
	mysqli_query($this->connect,"INSERT INTO cmpe272FinalProject.market_cart(username,product_id,comment)
				VALUES('$username','$product_id','$comment')");
} else if (!$comment) {
	mysqli_query($this->connect,"INSERT INTO cmpe272FinalProject.market_cart(username,product_id,rate)
				VALUES('$username','$product_id','$rate')");
} else {
	mysqli_query($this->connect,"INSERT INTO cmpe272FinalProject.market_cart(username,product_id,rate,comment)
				VALUES('$username','$product_id','$rate','$comment')");
}
?>