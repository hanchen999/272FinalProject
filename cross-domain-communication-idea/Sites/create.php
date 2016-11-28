<?php
    extract($_POST);
   $dbhost = 'localhost';
   $dbuser = 'ritacccc';
   $dbpass = 'Cmxcmx1211==';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'INSERT INTO users '.
      '(FirstName,LastName, Email, HomeAddress, HomePhone, CellPhone) '
      'VALUES ( $USERNAME,$PASSWORD,$FISRTNAME, $LASTNAME, $EMAIL, $HOMEADDRESS,$HOMEPHONE", $CELLPHONE)';
      
   mysql_select_db('ritacccc_mc');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);


$UserName, $Password, $FirstName, $LastName, $Email, $HomeAddress, $HomePhone, $CellPhone


'$UserName', '$Password', '$FirstName', '$LastName', '$Email', '$HomeAddress', '$HomePhone', '$CellPhone'

"$UserName", "$Password", "$FirstName", "$LastName", "$Email", "$HomeAddress", "$HomePhone", "$CellPhone"