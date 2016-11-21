<?php
 require_once('database.php');
 require_once('order.php');
 $username = 'hehe';
 $result = mysql_query("SELECT a.product_id as product_ids, SUM(a.price) as price FROM cmpe272FinalProject.market_cart a WHERE a.username = '$username' GROUP BY a.username", $connect);
 $orders = array();
 while($row = mysql_fetch_assoc($result)){
 	$product_ids = $row['product_ids'];
 	$product_id_list = "";
 	foreach ($product_ids as $product_id) {
        if (strlen($product_id_list) == 0) {
        	$product_id_list = $product_id_list . ($product_id);
        } else {
        	$product_id_list = $product_id_list . ',' . ($product_id);
        }
 	}
 	echo $product_id_list;
 	$price = $row['price'];
 	$flag = mysql_query("INSERT INTO cmpe272FinalProject.market_order(username,product_ids,cost)
				VALUES('$username','$product_ids','$price')", $connect);
 	$orders[] = new order($username, $product_ids, $price);
 	if ($flag) {
 	     mysql_query("DELETE FROM cmpe272FinalProject.market_cart a WHERE a.username = '$username", $connect);
     }
 }
 ?>
