<?php
 require_once('database.php');
 require_once('order.php');
 $username = 'hehe';
 $result = mysql_query("SELECT GROUP_CONCAT(a.product_id) as product_ids, SUM(b.price) as price FROM cmpe272FinalProject.market_cart a LEFT JOIN cmpe272FinalProject.market_product b ON a.product_id = b.product_id AND a.username = '$username' GROUP BY a.username", $connect);
 $orders = array();
 while($row = mysql_fetch_assoc($result)){
 	$product_ids = $row['product_ids'];
 	$product_id_list = $row['product_ids'];
 	$price = $row['price'];
 	$flag = mysql_query("INSERT INTO cmpe272FinalProject.market_order(username,product_ids,cost)
				VALUES('$username','$product_ids','$price')", $connect);
 	$orders[] = new order($username, $product_ids, $price);
 	if ($flag) {
 	     mysql_query("DELETE FROM cmpe272FinalProject.market_cart  WHERE username = '$username'", $connect);
     }
 }
 ?>
