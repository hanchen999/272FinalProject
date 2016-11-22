<?php
 require_once('database.php');
 require_once('order.php');
 $username = 'hehe';
 $result = mysqli_query($connect, "SELECT GROUP_CONCAT(a.product_id) as product_ids, SUM(b.price) as price FROM cmpe272FinalProject.market_cart a LEFT JOIN cmpe272FinalProject.market_product b ON a.product_id = b.product_id AND a.username = '$username' GROUP BY a.username");
 $orders = array();
 while($row = mysqli_fetch_assoc($result)){
 	$product_ids = $row['product_ids'];
 	$product_id_list = $row['product_ids'];
 	$price = $row['price'];
 	$flag = mysqli_query($connect, "INSERT INTO cmpe272FinalProject.market_order(username,product_ids,cost)
				VALUES('$username','$product_ids','$price')");
 	$orders[] = new order($username, $product_ids, $price);
 	if ($flag) {
 	     mysqli_query($connect, "DELETE FROM cmpe272FinalProject.market_cart  WHERE username = '$username'");
     }
 }
 ?>
