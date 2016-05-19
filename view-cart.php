<?php
include("dbconnect2.php");
 include_once("classes/cart.class.php");
 
 $cart	=	&$_SESSION['cart'];

//print_r($dataArray);



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
            	<h1>Shopping Cart</h1>
            	<p>
                
                <table align="center" style="border:1px solid black; border-collapse:collapse;" cellpadding="2" cellspacing="2" width="100%" >
                <tr>
                <th>#</th>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
                <th>Option</th>
                
                </tr>
                <form name="form1" method="post" action="updatebasket.php" >
               
                <?php 
				if(count($cart->items)>0){
				
				for($i = 0; $i<count($cart->items); $i++){ ?>
                <input type="hidden" name="itemids[]" value="<?php echo $cart->items[$i][0];?>" />
                <tr>
                
                <td>
				
				<?php echo $cart->items[$i][0];  ?></td>
                <td><img src="pImages/<?php echo $cart->items[$i][3];  ?>" height="100px" width="100px" /><br /><?php echo $cart->items[$i][1];  ?></td>
                <td>$<?php echo $cart->items[$i][2];  ?></td>
                
                <td><input type="text" name="items[]" value="<?php echo $cart->items[$i][4]; 
				 ?>" size="2"/></td>
                <td><?php echo $cart->items[$i][5];  ?></td>
                <td><a href="removeitem.php?itemid=<?php echo $cart->items[$i][0]; ?>" class="a" onclick="return confRem();">Remove this Item</a></td>
                
                </tr>
                
                <?php } 
				}
				else 
				   {
				?>
                <tr><td colspan="6" align="center">&nbsp;</td></tr>
                <tr><td colspan="6" align="center"><?php  echo "Shopping cart empty!!!";  } ?></td></tr>

                 <tr><td colspan="6">&nbsp;</td></tr>
                  <tr><td colspan="6" align="right"><strong>Total:</strong> $<?php echo  $cart->calculate_gTotal(); ?></td></tr>
                   <tr><td colspan="6">&nbsp;</td></tr>
                <tr><td colspan="6" align="center"> 
                <input type="submit" name="update" value="Update Cart" />
                 <input type="button" name="emptycart" value="Empty Cart" onclick="window.location='emptycart.php'" />&nbsp;<input type="button" name="continue" value="Continue Shopping" onclick="window.location='index.php'" />&nbsp;<input type="button" name="checkout" value="Checkout" onclick="window.location='checkout.php'" /></td></tr>
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
