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
	
	/* Ready */
	public function getProducts(){
		$SQL = "select * from `market_product`";
		$result = mysqli_query($this->conn, $SQL);
		$return_array = array();
		while($row = mysqli_fetch_assoc($result)){
			array_push($return_array,$row);
		}
		print_r(json_encode($return_array));
	}
	
	/* Test Ready */
	public function setUser($data){
		$username = $data["username"];
		$password = $data["password"];
		$email = $data["email"];
		$phone = $data["phone"];
		/*	Test Data	
		$username = "Shuoran";
		$password = "erseaerasets";
		$email = "shuoranzhang@yahoo.com";
		$phone = "2341234213";
		*/
		$SQL = "INSERT INTO market_user(username,password,email,phone)
				VALUES('$username','$password','$email','$phone')";
		mysqli_query($this->conn, $SQL);
	}
	
	/* Test Ready */
	public function setOrder($data){
		$username = $data["username"];
		$product_ids = $data["product_ids"];
		$price = $data["price"];
		$qty = $data["qty"];
		/*	Test Data	
		$username = "Shuoran";
		$product_ids = 10001;
		$price = 452.35;
		$qty = 3;
		*/
		$SQL = "INSERT INTO market_order(username,product_ids,cost,qty)
				VALUES('$username','$product_ids','$price',$qty)";
		mysqli_query($this->conn, $SQL);
	}
	
	public function getOrder($data){
		// no need so far
	}
	
	/* Test Ready */
	public function setRate($data){
		$product_id = $data["product_id"];
		$username = $data["username"];
		$rate = $data["rate"];
		$comment = $data["comment"];
		/*	Test Data
		$product_id = "10001";
		$username = "shuoran";
		$rate = "5";
		$comment = "price is good";
		*/
		$SQL = "insert into market_rate(username,product_id,rate,comment)
				VALUES('$username','$product_id',$rate,'$comment')";
		mysqli_query($this->conn, $SQL);
	}
	
	/* Test Ready */
	public function getRate($data){
		$product_id = $data["product_id"];
		/*	Test Data
		$product_id = "10001";
		*/
		$SQL = "select * from `market_rate` where product_id = $product_id";
		$result = mysqli_query($this->conn, $SQL);
		$return_array = array();
		while($row = mysqli_fetch_assoc($result)){
			array_push($return_array,$row);
		}
		print_r(json_encode($return_array));
	}
	
	/* Feature Removed
	public function setVisit($data){
		//$product_id = $data["product_id"];
		$product_id = 10002;
		$SQL = "UPDATE market_product SET visited = visited + 1 WHERE product_id='$product_id'";
		mysqli_query($this->conn, $SQL);
	}
	
	public function getVisit($data){

		//$product_id = $data["product_id"];
		$product_id = 10002;
		$SQL = "SELECT * FROM market_product WHERE product_id='$product_id'";
		$result = mysqli_query($this->conn, $SQL);
		$row = mysql_fetch_assoc($result);
		print_r(json_encode($row));
	}
	*/
	
}