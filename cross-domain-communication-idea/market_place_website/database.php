<?php
require_once('database_config.php');
$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $portnumber);
if(!$connect)
{
		echo 'Failed to connect';
}
?>
