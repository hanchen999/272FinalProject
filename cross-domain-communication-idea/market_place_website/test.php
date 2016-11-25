<?php

	require_once('communication.php');
	//$parameter = $_REQUEST;
	//$type = $parameter["type"];
	//$data = $parameter["data"];
	$communication = new communication();
	$communication->addToCart('hehe', '10002');
    $communication->addToCart('hehe', '10002');
    $communication->addToCart('hehe', '00001');
    $communication->addToCart('hehe', '00001');
    $communication->addToCart('hehe', '00002');
	$products = $communication->showProducts(null);
	echo json_encode($products);
	echo "\n";
	echo "\n";
	$products = $communication->showProducts('10002');
	echo json_encode($products);
	echo "\n";
	echo "\n";
	$order = $communication->setOrder('hehe');
	echo json_encode($order);
	echo "\n";
	echo "\n";
	$orders = $communication->showOrderHistory('hehe');
	echo json_encode($orders);
    echo "\n";
    echo "\n";
    echo json_encode($communication->showCart('hehe'));
	//if($type=="getProducts"){
	//	$op->getProducts();
	//} else if($type=="setUser"){
	//	$op->setUser($data);
	//} else if($type=="setOrder"){
	//	$op->setOrder($data);
	//} else if($type=="getOrder"){
	//	$op->getOrder($data);
	//} else if($type=="setRate"){
	//	$op->setRate($data);
	//} else if($type=="getRate"){
	//	$op->getRate($data);
	//} else if($type=="setVisit"){
	//	$op->setVisit($data);
	//} else if($type=="getVisit"){
	//	$op->getVisit($data);
	//} else {
	//	exit("request type error");
	//}


?>