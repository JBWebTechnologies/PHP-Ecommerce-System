<?php

	 include_once("classes/cart.class.php");
	
		
	
	$id     = 0;
	$title  = "";
	$price  = 0.0;
	$img    = "";
	$qty = 0;
	
	$cart	=	&$_SESSION['cart'];
	//print_r($cart);
	
	
	if($_POST['sub']){

		echo $id    = intval($_POST['id']);
		echo $title  = $_POST['name'];;
		$price = $_POST['price'];
		$img   = $_POST['image'];
		$qty= 1;
	 		//exit;
		$cart->add_item($id, $title, $price, $img, $qty);
			
		header("Location: view-cart.php");
		exit;

	 }
	 
	 
?>