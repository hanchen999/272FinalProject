<?php
require_once('database_config.php')
$connect = new mysqli($dbhos:t, $dbuser, $dbpass, $dbname, $portnumber);
if(!$connect)
{
		echo 'Failed to connect';
}
?>
