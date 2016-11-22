<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = "CREATE TABLE market_order( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "product_ids VARCHAR(255) NOT NULL, ".
       "username VARCHAR(255) NOT NULL, ".
       "cost FLOAT NOT NULL, ".
       "PRIMARY KEY ( id )); ";
mysql_select_db( 'cmpe272FinalProject' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table Order created successfully\n";
$sql = "CREATE TABLE market_company( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "name VARCHAR(100) NOT NULL, ".
       "url VARCHAR(255) NOT NULL, ".
       "PRIMARY KEY ( id )); ";
mysql_select_db( 'cmpe272FinalProject' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table Company created successfully\n";
$sql = "CREATE TABLE market_product( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "product_id VARCHAR(100) NOT NULL, ".
       "price FLOAT NOT NULL, ".
       "picture VARCHAR(255) NOT NULL, ".
       "url VARCHAR(255) NOT NULL, ".
       "visited INT NOT NULL,".
       "PRIMARY KEY ( id )); ";
mysql_select_db( 'cmpe272FinalProject' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table Product created successfully\n";
$sql = "CREATE TABLE market_user( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "username VARCHAR(50) NOT NULL, ".
       "password VARCHAR(50) NOT NULL, ".
       "email VARCHAR(255) NOT NULL, ".
       "PRIMARY KEY ( id )); ";
mysql_select_db( 'cmpe272FinalProject' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table User created successfully\n";
$sql = "CREATE TABLE market_rate( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "username VARCHAR(50) NOT NULL, ".
       "product_id VARCHAR(100) NOT NULL, ".
       "rate INT, ".
       "comment VARCHAR(255), ".
       "PRIMARY KEY ( id )); ";
mysql_select_db( 'cmpe272FinalProject' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table Rate created successfully\n";
$sql = "CREATE TABLE market_cart( ".
       "id INT NOT NULL AUTO_INCREMENT, ".
       "username VARCHAR(50) NOT NULL, ".
       "product_id VARCHAR(100) NOT NULL, ".
       "PRIMARY KEY ( id )); ";
mysql_select_db( 'cmpe272FinalProject' );
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table Cart created successfully\n";
mysql_close($conn);
?>
