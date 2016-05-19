<?php
	
	include_once("classes/cart.class.php");

	if($_SESSION['cart'])
	{
		$_SESSION['cart'] = new Cart;
	}


	header("Location: view-cart.php");
	exit;
		
?>