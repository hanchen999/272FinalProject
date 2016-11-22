<?php
   class user {
       var $username;
       var $password;
       var $email;
       var $phone;
       function __construct($username, $password, $email, $phone) {
       $this->username = $username;
       $this->password = $password;
       $this->email= $email;  
       $this->phone= $phone;
   }
   }
?>