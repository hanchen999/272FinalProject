<?php
 require_once('database.php');
 require_once('product.php');
 	$result = mysql_query("SELECT a.product_id as product_id, a.price as price, a.picture as picture, a.url as url, a.visited as visited, AVG(b.rate) as rate FROM cmpe272FinalProject.market_product a LEFT JOIN cmpe272FinalProject.market_rate b ON a.product_id = b.product_id AND b.rate IS NOT NULL GROUP BY a.product_id, a.picture, a.url, a.visited", $connect);
	$products = array();
        while($row = mysql_fetch_assoc($result)){
        $temp = new product($row['product_id'], $row['price'], $row['visited'], $row['url'], $row['picture'], $row['visited'], 'null');
    $product_id = $row['product_id'];
   $comments = mysql_query("SELECT b.comment as comment From cmpe272FinalProject.market_rate b where b.product_id = '$product_id' and b.comment IS NOT NULL ORDER BY b.id DESC LIMIT 3",$connect);
    $comment = array();
    while ($records = mysql_fetch_assoc($comments)) {
        $comment[] = $records['comment'];
    }
    $temp->comment = $comment;
    $products[] = $temp;
}
foreach($products as $x) {
   echo $x->product_id;
}

?>
