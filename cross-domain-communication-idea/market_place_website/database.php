<?php
require_once('database_config.php')
$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $portnumber);
if(!$connect)
{
		echo 'Failed to connect';
}
?>
