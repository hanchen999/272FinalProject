<?php
   class order {
       var $username;
       var $product_ids;
       var $price;
       function __construct($username, $product_ids, $price) {
       $this->username = $username;
       $this->product_ids = $product_ids;
       $this->price= $price;  
   }
   }
?>
