<?php

$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = '';
$dbname = 'cmpe272FinalProject';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$SQL = "select * from `market_order`";
		$result = mysqli_query($conn, $SQL);
		$return_array = array();
		while($row = mysql_fetch_assoc($result)){
			array_push($return_array,$row);
		}
		print_r(json_encode($return_array));

?>