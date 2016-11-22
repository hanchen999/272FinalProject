 <?php
 require_once('database.php');
// create a variable
$return = $_POST;
$username = $return['username'];
$product_id = $return['product_id'];

 
//Execute the query
$result = mysql_query("SELECT count(*) as count From cmpe272FinalProject.market_cart a WHERE a.product_id = '$product_id' and a.username = '$username'", $connect);
if ($result['count'] == 0) {
     mysql_query("INSERT INTO market_cart(username,product_id)
				VALUES('$username','$product_id')", $connect);
}
?>