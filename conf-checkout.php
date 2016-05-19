<?php
error_reporting(~E_NOTICE);

include("dbconnect2.php");
 include_once("classes/cart.class.php");
 
 $cart	=	&$_SESSION['cart'];

//print_r($dataArray);
 if($_POST['sub']){
    $fullname = $_SESSION['fullname'] ;
    $email    = $_SESSION['email'];
 	$address  = $_SESSION['address'];
 	$city     = $_SESSION['city'] ;
 	 $state   = $_SESSION['state'];
 	$country  = $_SESSION['country'];
 	$zipcode  = $_SESSION['zipcode'];
 	$phone    = $_SESSION['phone'] ;
	
	$sfullname = $_SESSION['sfullname'] ;
    $semail    = $_SESSION['semail'];
 	$saddress  = $_SESSION['saddress'];
 	$scity     = $_SESSION['scity'] ;
 	$sstate    = $_SESSION['sstate'];
 	$scountry  = $_SESSION['scountry'];
 	$szipcode  = $_SESSION['szipcode'];
 	$sphone    = $_SESSION['sphone'] ;
    
	$gtotal = $cart->calculate_gTotal();
	$tQty    = $cart->calculate_qty();
	
	 $sql = "INSERT INTO tblorder ( sCountry , orderStatus ,OrdTotal ,totalQty ,Fname ,
	 Email , Address ,City ,State ,Zip ,Phone ,sFname ,sEmail ,sAddress ,sCity ,sState ,
     sZip , sPhone,Country ,Orderdate) values(\"$scountry\", \"p\", $gtotal ,$tQty,
	 \"$fullname\", \"$email\",\"$address\", \"$city\",\"$state\",\"$zipcode\", \"$phone\",
	 \"$sfullname\", \"$semail\",\"$saddress\", \"$scity\",\"$sstate\",\"$szipcode\", \"$sphone\"
	,\"$country\", now() )" ;
 
    
	
	
	if(mysql_query($sql)){
	   
	  $maxid = mysql_insert_id();
	  
	  for($i = 0; $i<count($cart->items); $i++){
	   $pid = $cart->items[$i][0];
	   $qty  = $cart->items[$i][4];
	   $price = $cart->items[$i][2];
	   $total = $cart->items[$i][5];
	  
	    $detSql = "INSERT INTO tbleorderdetail set oID= $maxid , pID= $pid , Quantity= $qty ,
	    Price =$price, Total= $total ";
         if(mysql_query($detSql)){
		 
		  //echo "Data recorderd sucessfully";
		 
		 }
	  }
	  $str= '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="form1" id="form1">
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="upload" value="1">
				<input type="hidden" name="business" value="sales@vsvapor.net">';
				$str .="<input type='hidden' name='invoice' value='$maxid'>";
				
				$j=1;
			
			for ($i=0; $i<count($cart->items); $i++){		 			 		
		 				 
				$_itemtitle    = $cart->items[$i][1];
		 		$_itemPrice    = $cart->items[$i][2];		 		
		 		$_quantity     = $cart->items[$i][4];
				
					
				$str .= "<input type='hidden' name='item_name_$j' value='$_itemtitle'>
				<input type='hidden' name='amount_$j' value='$_itemPrice'>
		 		<input type='hidden' name='quantity_$j' value='$_quantity'>";
				$j++;
		}
	  $str .= '<input type="hidden" name="currency_code" value="EUR">
			<input type="hidden" name="return" value="http://www.evsmobile.com/paypall_ret.php">
			<input type="hidden" name="rm" value="2">
			<input type="hidden" name="cancel_return" value="http://www.evsmobile.com/cancel_return.php">
			<input type="hidden" name="notify_url"  value="http://www.evsmobile.com/paypall_return.php">
			<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-butcc.gif"
	       	border="0" name="submit" alt="Make payment - it is fast, free and secure!">
			</form>';
	echo $str;
	
			echo '<script>document.form1.submit();</script>';
      	  
	
	}else{
	
	 echo "Errro in query";
	}
 
 }
 
 
 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free Website Template 12</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function confRem(){
	
	if(confirm("Are you sure to remove this item from cart")){
		return true;
	}
	
	return false;

}

function copyInfo(){
  var fullname;
  var email;
  var address;
  var city;
  
  fullname = document.getElementById('fname').value;
  email = document.getElementById('email').value;
  address = document.getElementById('address').value;
  
  document.getElementById('sfname').value = fullname;
  document.getElementById('semail').value = email;
  document.getElementById('saddress').value = address;



}

</script>
</head>
<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="mainLogo">
            <div class="logo">Mobile <span>Store</span></div>
            <div class="author">design by <a href="http://www.free-flash-websites.com">Free-Flash-Websites.com</a></div>
        </div>
        <div class="icons">
        	<a href=""><img src="images/facebook_32.png" alt="" /></a>&nbsp;<a href=""><img src="images/twitter_32.png" alt="" /></a>
        </div>
        <div id="navcontainer">
            <ul id="navlist">
                <li id="active"><a href="#">HOME</a></li>
                <li class="menuSeparator"><img src="images/menuSeparator.png" alt="" /></li>
                <li><a href="#">ABOUT</a></li>
                <li class="menuSeparator"><img src="images/menuSeparator.png" alt="" /></li>
                <li><a href="#">GALLERY</a></li>
                <li class="menuSeparator"><img src="images/menuSeparator.png" alt="" /></li>
                <li><a href="#">SERVICES</a></li>
                <li class="menuSeparator"><img src="images/menuSeparator.png" alt="" /></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>
    </div>
    <!-- end #header -->
    <div class="mainContent">
    	<div class="leftSidebar">
        	<div class="titleBlock">Mobile Types</div>
            <div class="blockList">
            	<ul>
                	<li><a href="">Nokia</a></li>
                    <li><a href="">Samsung</a></li>
                    <li><a href="">LG</a></li>
                    <li><a href="">Sony Ericsson</a></li>
                    <li><a href="">Motorola</a></li>
                    <li><a href="">Toshiba</a></li>
                    <li><a href="">Fly</a></li>
                </ul>
            </div>
            <br />
            <div class="titleBlock">iPhone 3G</div>
            <div class="blockList">
            	<ul>
                	<li><a href="">Nokia</a></li>
                    <li><a href="">Samsung</a></li>
                    <li><a href="">LG</a></li>
                    <li><a href="">Sony Ericsson</a></li>
                    <li><a href="">Motorola</a></li>
                    <li><a href="">Toshiba</a></li>
                    <li><a href="">Fly</a></li>
                </ul>
            </div>
            <br />
            <div class="titleBlock">Nokia</div>
            <div class="blockList">
            	<ul>
                	<li><a href="">Nokia</a></li>
                    <li><a href="">Samsung</a></li>
                    <li><a href="">LG</a></li>
                    <li><a href="">Sony Ericsson</a></li>
                    <li><a href="">Motorola</a></li>
                    <li><a href="">Toshiba</a></li>
                    <li><a href="">Fly</a></li>
                </ul>
                <img src="images/phone.jpg" alt="" />
            </div>
        </div>
        <div class="rightSidebar">
        	<div class="titleBlock">Mobile Types</div>
            <div class="blockList">
            	<ul>
                	<li><a href="">Nokia</a></li>
                    <li><a href="">Samsung</a></li>
                    <li><a href="">LG</a></li>
                    <li><a href="">Sony Ericsson</a></li>
                    <li><a href="">Motorola</a></li>
                    <li><a href="">Toshiba</a></li>
                    <li><a href="">Fly</a></li>
                </ul>
            </div>
            <br />
            <div class="titleBlock">iPhone 3G</div>
            <div class="blockList">
            	<ul>
                	<li><a href="">Nokia</a></li>
                    <li><a href="">Samsung</a></li>
                    <li><a href="">LG</a></li>
                    <li><a href="">Sony Ericsson</a></li>
                    <li><a href="">Motorola</a></li>
                    <li><a href="">Toshiba</a></li>
                    <li><a href="">Fly</a></li>
                </ul>
            </div>
            <br />
            <div class="titleBlock">Nokia</div>
            <div class="blockList">
            	<ul>
                	<li><a href="">Nokia</a></li>
                    <li><a href="">Samsung</a></li>
                    <li><a href="">LG</a></li>
                    <li><a href="">Sony Ericsson</a></li>
                    <li><a href="">Motorola</a></li>
                    <li><a href="">Toshiba</a></li>
                    <li><a href="">Fly</a></li>
                </ul>
                <img src="images/phone.jpg" alt="" />
            </div>
        </div>
        <div class="bodySidebar">
        	<div class="iphoneLinks">
            	<img src="images/iphone.jpg" alt="" /><br /><br />
                <a href="">iPhone 4G</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">see more details >></a>
            </div>
            <div class="copyrights">
            	<h1>Confirm Order</h1>
            	
                
                <form name="form1" method="post" action="conf-checkout.php" >
                <table align="center" style="border:1px solid black; border-collapse:collapse;" cellpadding="2" cellspacing="2" width="100%" >
                <tr>
                <th>#</th>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                
                
                </tr>
              
               
                <?php 
				if(count($cart->items)>0){
				
				for($i = 0; $i<count($cart->items); $i++){ ?>
                <input type="hidden" name="itemids[]" value="<?php echo $cart->items[$i][0];?>" />
                <tr>
                
                <td>
				
				<?php echo $cart->items[$i][0];  ?></td>
                <td><img src="pImages/<?php echo $cart->items[$i][3];  ?>" height="100px" width="100px" /><br /><?php echo $cart->items[$i][1];  ?></td>
                <td>$<?php echo $cart->items[$i][2];  ?></td>
                
                <td><?php echo $cart->items[$i][4]; ?></td>
                <td><?php echo $cart->items[$i][5];  ?></td>
                
                </tr>
                
                <?php } 
				}
				else 
				   {
				?>
                <tr><td colspan="6" align="center">&nbsp;</td></tr>
                <tr><td colspan="6" align="center"><?php  echo "Shopping cart empty!!!";  } ?></td></tr>

                 <tr><td colspan="6">&nbsp;</td></tr>
                  <tr><td colspan="6" align="right"><strong>Grand Total:</strong> $<?php echo  $cart->calculate_gTotal(); ?></td></tr>
                   <tr><td colspan="6">&nbsp;</td></tr>
                <tr><td colspan="6" align="center"> 
               
                </table>
                <table align="center" cellspacing="2" width="100%">
                <tr>
                <td colspan="2"><em>Please review your order details and confirm order.</em></td>
                
                </tr>
                
                <?php if($error){ ?>
                <tr>
                <td colspan="2" style="padding:10px"><div style="background-color:#339999; width:400px; height:auto; color:#FFFFFF; border:1px solid #33FFCC; padding:5px;"><?php echo $error; ?></div></td>
                
                </tr>
                <?php } ?>
                <tr>
                <td colspan="2"><strong>Billing Information</strong></td>
                
                </tr>
                
                <tr>
                <td>Full Name</td>
                <td><?php echo $_SESSION['fullname'] ; ?></td>
                
                </tr>
                
                <tr>
                <td>Email</td>
                <td><?php echo $_SESSION['email']; ?></td>
                </tr>
                
                <tr>
                <td>Address</td>
                <td><?php echo $_SESSION['address']; ?></td>
                
                </tr>
                
                <tr>
                <td>City</td>
                <td><?php echo $_SESSION['city'] ?></td>
                
                </tr>
                <tr>
                <td>State</td>
                <td><?php echo $_SESSION['state']; ?></td>
                
                </tr>
                <tr>
                <td>Country</td>
                <td><?php echo $_SESSION['country']; ?></td>
                
                </tr>
                
                
                <tr>
                <td>Zip Code</td>
                <td><?php echo $_SESSION['zipcode']; ?></td>
                
                </tr>
                
                <tr>
                <td>Phone</td>
                <td><?php echo $_SESSION['phone']; ?></td>
                
                </tr>
                
                 <tr>
                <td colspan="2"><strong>Shipping Information</strong><br />
                <tr>
                <td>Full Name</td>
                <td><?php echo $_SESSION['sfullname'] ; ?></td>
                
                </tr>
                
                <tr>
                <td>Email</td>
                <td><?php echo $_SESSION['semail']; ?></td>
                </tr>
                
                <tr>
                <td>Address</td>
                <td><?php echo $_SESSION['saddress']; ?></td>
                
                </tr>
                
                <tr>
                <td>City</td>
                <td><?php echo $_SESSION['scity'] ?></td>
                
                </tr>
                <tr>
                <td>State</td>
                <td><?php echo $_SESSION['sstate']; ?></td>
                
                </tr>
                <tr>
                <td>Country</td>
                <td><?php echo $_SESSION['scountry']; ?></td>
                
                </tr>
                
                
                <tr>
                <td>Zip Code</td>
                <td><?php echo $_SESSION['szipcode']; ?></td>
                
                </tr>
                
                <tr>
                <td>Phone</td>
                <td><?php echo $_SESSION['sphone']; ?></td>
                
                </tr>
                 <tr>
                <td></td>
                <td><input type="submit" name="sub" value="Confirm Order" /></td>
                
                </tr>
                </form>
                
                </table>
                
                
                </p>
                
            </div>
        </div>
    </div>
    <br class="clearfloat" />
    <!-- begin #footer -->
    <div id="footer">
        <p>
            Terms of Use |
            <a title="This page validates as XHTML 1.0 Strict" href="http://validator.w3.org/check/referer" class="footerLink"><abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a> | 
            <a title="This page validates as CSS" href="http://jigsaw.w3.org/css-validator/check/referer" class="footerLink"><abbr title="Cascading Style Sheets">CSS</abbr></a><br />
            Copyright &copy; Mobile Store. Designed by <a href="http://www.free-flash-websites.com" title="Free Flash Websites">Free Flash Websites</a>
        </p>
    </div>
    <!-- end #footer -->
</div>
<!-- end #container -->
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
