<?php
<<<<<<< HEAD
require_once('database_config.php')
$connect = new mysqli($dbhos:t, $dbuser, $dbpass, $dbname, $portnumber);
=======
require_once('database_config.php');
$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $portnumber);
>>>>>>> 410502de666d1918b0a0de308dbe048fad6d4de1
if(!$connect)
{
		echo 'Failed to connect';
}
?>
