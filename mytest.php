<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'cmpe272FinalProject';
$portnumber = 3036;

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $portnumber);

$SQL = "select * from `market_order`";
		$result = mysqli_query($conn, $SQL);
		$return_array = array();
		while($row = mysqli_fetch_assoc($result)){
			array_push($return_array,$row);
		}
		print_r(json_encode($return_array));

?>
