<input type ="button" onclick="javascript:location.href='../index.php'" value="Back to homepage">
<br><br>

<?php
session_start();
if(isset($_SESSION['admin'])){
	echo "Hello Admin!";
	echo "<h1> Accounts List</h1><br>";

	foreach (file("Accounts.txt") as $line){
		$arr = explode(' ',trim($line));
		echo"<div>{$line}</div>";
	}
}
else{
	echo "No Authorization! Please log in";
	sleep(2);
	//header("Location:login.php");
	$url = "http://www.starrybookstore.com/account/login.php";  
	echo "<script type='text/javascript'>";  
	echo "window.location.href='$url'";  
	echo "</script>";
}

?>

<br><br>
<input type = "button" onclick="javascript:location.href='logout.php'" value="Log out"></input>
