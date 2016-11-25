<?php
   class product {
       var $product_id;
       var $price;
       var $visited;
       var $picture;
       var $rate;
       var $comments;
       function __construct($product_id, $price, $visited, $picture, $rate, $comments) {
       $this->product_id = $product_id;
       $this->price= $price;
       $this->visited = $visited;
       $this->picture = $picture;
       $this->rate = $rate;
       $this->comments = $comments;  
   }
   }
?>
