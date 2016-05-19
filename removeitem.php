<?php
	include_once("classes/cart.class.php");
	session_start();
	$cart = &$_SESSION['cart'];
	
	$_itemid = intval($_REQUEST['itemid']);
	
	if(!$_itemid){
	
		header("Location: view-cart.php");
		exit;
	}
	
	
	$result = $cart->remove_item($_itemid);
		
	header("Location: view-cart.php");
	exit;
	

?>