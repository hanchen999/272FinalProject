
<!DOCTYPE html>
<html>
	<head>
	<?php
		extract($_POST);
		//check if the user has left username or password field blank
		if(!$USERNAME || !$PASSWORD){
			fieldBlank();
			die();
		}
		//check if the new user button
		if(isset($NewUser)) {
			if(!($file = fopen("password.txt", "a"))) {
				print("<title>Error</title></head><body> Could not open password file</body></html>");
				die();
			}
			fputs($file, "$USERNAME, $PASSWORD\n");
			userAdded($USERNAME);
		}else {
			if(!($file = fopen("password.txt", "r"))) {
				print("<title>Error</title></head><body> Could not open password file</body></html>");
				die();
			}
			$userVerified = 0;
			while (!feof($file) && !$userVerified) {
				$line = fgets($file, 255);
				$line = chop($line);
				$field = split(",", $line, 2);
				if($USERNAME == $field[0]) {
					$userVerified = 1;
					if($PASSWORD == $field[1]) {
						accessGranted($USERNAME);
					}else {
						wrongPassword();
					}
				}
			}
			fclose($file);
			if(!$userVerified) {
				accessDenied();
			}
		}
		function checkPassword($userpassword, $filedata) {
			if($userpassword = $filedata[1]) {
				return true;
			}else {
				return false;
			}
		}
		function userAdded($name) {
			print("<title>Thank you</title></head><body style=\"font-family: arial; font-size:1em; color: blue\"><strong>You have been added to the user list, $name.</br> Enjoy the sites.</strong>");
		}
		function accessGranted($name) {
			print("<title>Thank you</title></head><body style=\"font-family: arial; font-size:1em; color: blue\"><strong>Permission has been granted, $name</br> Enjoy the sites.</strong>");
		}
		function wrongPassword() {
			print("<title>Access Denied</title></head><body style=\"font-family: arial; font-size:1em; color: red\"><strong>You entered an invalid password.</br> Access has been denied.</strong>");
		}
		function accessDenied() {
			print("<title>Access Denied</title></head><body style=\"font-family: arial; font-size:1em; color: red\"><strong>You were denied access to this server</br></strong>");
		}
		function fieldBlank(){
			print("<title>Access Denied</title></head><body style=\"font-family: arial; font-size:1em; color: blue\"><strong>Please fill in all form fields.</br> </strong>");
		}
			
 	?>
 		</body>
 	</html>