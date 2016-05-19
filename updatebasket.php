<?php
	include ("classes/cart.class.php");
	session_start();
	
	$cart = &$_SESSION['cart'];
	
	
	$_items 	= array();
	$_itemids 	= array();
	
	$_ids 		= array();
	
	
	$_items 	    = $_POST['items'];
	$_itemids    	= $_POST['itemids'];
	$update		    = $_POST['update'];
	
	if($update){
	
		if(count($_items) > 0){
			

			for($i=0; $i<=count($_items); $i++){	
			
				if($_items[$i] > 0){
					
					
					$cart->set_item_count($_itemids[$i], $_items[$i]);
				 }
			}
		}
	}
		
	
	header("Location: view-cart.php");
	exit;
		
	
?>