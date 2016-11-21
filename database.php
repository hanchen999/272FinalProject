<?php
$dbhost = 'localhost:3036';
$dbuser = 'root';
$dbpass = '';
$connect = mysql_connect($dbhost, $dbuser, $dbpass);
if(!$connect)
{
		echo 'Failed to connect';
}
?>
