<?php
   class cart {
       var $username;
       var $product_ids;
       var $quantity;
       function __construct($username, $product_ids, $quantity) {
       $this->username = $username;
       $this->product_ids = $product_ids;
       $this->quantity = $quantity;
   }
   }
?>