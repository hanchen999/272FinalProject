<?php

	require_once('communication.php');
	//$parameter = $_REQUEST;
	//$type = $parameter["type"];
	//$data = $parameter["data"];
	$communication = new communication();
	//$products = $communication->showProducts();
	//echo "\n";
	//echo "\n";
	//$order = $communication->setOrder('hehe');
	//echo "\n";
	//echo "\n";
	//$orders = $communication->showOrderHistory('hehe');
    //echo "\n";
    //echo "\n";
    $communication->addToCart('hehe', '10002');
    $communication->addToCart('hehe', '10002');
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