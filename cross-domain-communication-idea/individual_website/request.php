<?php

	require_once('mainModel.php');
	$parameter = $_REQUEST;
	$type = $parameter["type"];
	$data = $parameter["data"];
	$op = new mainModel();
	if($type=="getProducts"){
		$op->getProducts();
	} else if($type=="setUser"){
		$op->setUser($data);
	} else if($type=="setOrder"){
		$op->setOrder($data);
	} else if($type=="getOrder"){
		$op->getOrder($data);
	} else if($type=="setRate"){
		$op->setRate($data);
	} else if($type=="getRate"){
		$op->getRate($data);
	} else if($type=="setVisit"){
		$op->setVisit($data);
	} else if($type=="getVisit"){
		$op->getVisit($data);
	} else {
		exit("request type error");
	}


?>