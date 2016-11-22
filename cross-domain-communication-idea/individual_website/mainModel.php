<?php

/*************************************************************

	This php script is for six individual websites.
	This php script contains set & get methods, which
	purpose is to communicate with the main market place.

*************************************************************/

class mainModel{
	
	protected $conn;
	
	public function __construct(){
        require_once('DB_individual.php');
		$this->conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    }
	
	public function getProducts(){
		$SQL = "select * from `market_product`";
		$result = mysqli_query($this->conn, $SQL);
		$return_array = array();
		while($row = mysql_fetch_assoc($result)){
			array_push($return_array,$row);
		}
		print_r(json_encode($return_array));
	}
	
	public function setUser($data){
		
	}
	
	public function setOrder($data){
		$SQL = "INSERT INTO market_order(username,product_ids,cost)
				VALUES('$username','$product_ids','$price')";
		mysqli_query($this->conn, $SQL);
	}
	
	public function getOrder($data){
		// no need so far
	}
	
	public function setRate($data){
		$product_id = $data["product_id"];
		$username = $data["username"];
		$rate = $data["rate"];
		$comment = $data["comment"];
		
		$SQL = "insert into market_rate(username,product_id,rate,comment)
				VALUES('$username','$product_id',$rate,'$comment')";
		mysqli_query($this->conn, $SQL);
	}
	
	public function getRate($data){
		$product_id = $data["product_id"];
		$SQL = "select * from `market_product` where product_id = $product_id";
		$result = mysqli_query($this->conn, $SQL);
		$return_array = array();
		while($row = mysql_fetch_assoc($result)){
			array_push($return_array,$row);
		}
		print_r(json_encode($return_array));
	}
	
	public function setVisit($data){
		$product_id = $data["product_id"];
		$SQL = "UPDATE market_product SET visited = visited + 1 WHERE product_id='$product_id'";
		mysqli_query($this->conn, $SQL);
	}
	
	public function getVisit($data){
		$product_id = $data["product_id"];
		$SQL = "SELECT * FROM market_product WHERE product_id='$product_id'";
		$result = mysqli_query($this->conn, $SQL);
		$row = mysql_fetch_assoc($result);
		print_r(json_encode($row));
	}
}