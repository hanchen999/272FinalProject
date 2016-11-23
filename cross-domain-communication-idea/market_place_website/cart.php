<?php
   class cart {
       var $username;
       var $product_ids;
       function __construct($username, $product_ids) {
       $this->username = $username;
       $this->product_ids = $product_ids;
   }
   }
?>