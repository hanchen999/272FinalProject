<?php
 require_once('database.php');
$return = $_POST;
$product_id = $return['product_id'];

mysql_query("UPDATE cmpe272FinalProject.market_product SET visited = visited + 1 WHERE product_id='$product_id'", $connect);
?>