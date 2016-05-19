<?php
error_reporting(~E_NOTICE);

include("dbconnect2.php");
 include_once("classes/cart.class.php");
 
 ///$cart	=	&$_SESSION['cart'];

//print_r($dataArray);

if($_POST['sub']){
 //billing
 $fullname = trim($_POST['fullname']);
 $email = trim($_POST['email']);
 $address = trim($_POST['address']);
 $city = trim($_POST['city']);
 $state = trim($_POST['state']);
 $country = trim($_POST['country']);
 $zipcode = trim($_POST['zipcode']);
 $phone = trim($_POST['phone']);
 //shipping
 $sfullname = trim($_POST['sfullname']);
 $semail = trim($_POST['semail']);
 $saddress = trim($_POST['saddress']);
 $scity = trim($_POST['scity']);
 $sstate = trim($_POST['sstate']);
 $scountry = trim($_POST['scountry']);
 $szipcode = trim($_POST['szipcode']);
 $sphone = trim($_POST['sphone']);
  $error = "";
 //validateion
 if(!$fullname){
   $error .="&bull;Please enter you full name<br>";

 }
 
 if(!$address){
    $error .="&bull;Please enter you address<br>";
 
 }
 if(!$email){
    $error .="&bull;Please enter your email<br>";
 
 }
 
 if(!$error){
 
 
  	$_SESSION['fullname'] = $fullname;
 	$_SESSION['email'] = $email;
 	$_SESSION['address'] = $address;
 	$_SESSION['city'] = $city;
 	$_SESSION['state'] = $state;
 	$_SESSION['country'] = $country;
 	$_SESSION['zipcode'] = $zipcode;
 	$_SESSION['phone'] = $phone;
	
	$_SESSION['sfullname'] = $sfullname;
 	$_SESSION['semail'] = $semail;
 	$_SESSION['saddress'] = $saddress;
 	$_SESSION['scity'] = $scity;
 	$_SESSION['sstate'] = $sstate;
 	$_SESSION['scountry'] = $scountry;
 	$_SESSION['szipcode'] = $szipcode;
 	$_SESSION['sphone'] = $sphone;
   
    header("Location: conf-checkout.php");
	exit;
 
 
 
 
 
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
            	<h1>Checkout</h1>
            	<p>
                
                <form name="form1" method="post" action="checkout.php" >
               
                <table align="center" cellspacing="2" width="100%" >
                <tr>
                <td colspan="2"><em>Please Enter your Billing and Shipping Information.</em></td>
                
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
                <td><input type="text" name="fullname" id="fname" value="<?php echo $fullname; ?>" /></td>
                
                </tr>
                
                <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email" value="<?php echo $email; ?>" /></td>
                
                </tr>
                
                <tr>
                <td>Address</td>
                <td><input type="text" name="address" value="<?php echo $address; ?>" id="address" /></td>
                
                </tr>
                
                <tr>
                <td>City</td>
                <td><input type="text" name="city" value="<?php echo $city; ?>" /></td>
                
                </tr>
                <tr>
                <td>State</td>
                <td><input type="text" name="state" value="<?php echo $state; ?>" /></td>
                
                </tr>
                <tr>
                <td>Country</td>
                <td><input type="text" name="country" value="<?php echo $country; ?>" /></td>
                
                </tr>
                
                
                <tr>
                <td>Zip Code</td>
                <td><input type="text" name="zipcode" value="<?php echo $zipcode; ?>" /></td>
                
                </tr>
                
                <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $phone; ?>" /></td>
                
                </tr>
                
                 <tr>
                <td colspan="2"><strong>Shipping Information</strong><br />
                <input type="checkbox" name="same" value="1" onclick="copyInfo();" />&nbsp;Same as above	
                </td>
                
                </tr>
                
                <tr>
                <td>Full Name</td>
                <td><input type="text" name="sfullname" id="sfname" value="<?php echo $sfullname; ?>" /></td>
                
                </tr>
                
                <tr>
                <td>Email</td>
                <td><input type="text" name="semail" id="semail" value="<?php echo $semail; ?>" /></td>
                
                </tr>
                
                <tr>
                <td>Address</td>
                <td><input type="text" name="saddress" id="saddress" value="<?php echo $saddress; ?>" /></td>
                
                </tr>
                
                <tr>
                <td>City</td>
                <td><input type="text" name="scity" value="<?php echo $scity; ?>" /></td>
                
                </tr>
                <tr>
                <td>State</td>
                <td><input type="text" name="sstate" value="<?php echo $sstate; ?>" /></td>
                
                </tr>
                <tr>
                <td>Country</td>
                <td><input type="text" name="scountry" value="<?php echo $scountry; ?>" /></td>
                
                </tr>
                
                
                <tr>
                <td>Zip Code</td>
                <td><input type="text" name="szipcode" value="<?php echo $szipcode; ?>" /></td>
                
                </tr>
                
                <tr>
                <td>Phone</td>
                <td><input type="text" name="sphone" value="<?php echo $sphone; ?>" /></td>
                
                </tr>
                <tr>
                <td></td>
                <td><input type="submit" name="sub" value="Confirm Order" />&nbsp;<input type="button" name="sub" value="Back" onclick="window.location='view-cart.php'" /></td>
                
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
