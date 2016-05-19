<?php
include("dbconnect2.php");

$sql = "Select * from tblproduct";
$rs = mysql_query($sql);

$dataArray = array();



while($row = mysql_fetch_row($rs)){
	array_push($dataArray,$row); 

}
//print_r($dataArray);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free Website Template 12</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
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
            	<h1>All website template is released under a Creative Commons Avttribution 2.5 License</h1>
            	<p>
                
                <table align="center" cellpadding="2" cellspacing="2" >
                <form name="form1" method="post" action="addtocart.php" >
                <input name="id" type="hidden" value="<?php echo $dataArray[0][0];  ?>" />
                <input name="name" type="hidden" value="<?php echo $dataArray[0][1];  ?>" />
                <input name="price" type="hidden" value="<?php echo $dataArray[0][2];  ?>" />
                <input name="image" type="hidden" value="<?php echo $dataArray[0][6];  ?>" />
                
                <tr>
                <td><img src="pImages/<?php echo $dataArray[0][6];  ?>" height="200px" width="100px" /></td>
                <td>Name: <?php echo $dataArray[0][1];  ?><br />
                Price: <?php echo $dataArray[0][2];  ?>
                <br />
                Color: <?php echo $dataArray[0][3];  ?>
                
                Description: <?php echo substr($dataArray[0][4],0,100);  ?>......
                
                <br />
                <input type="submit" name="sub" value="Add to cart" />
                </td>
                
                </tr>
                </form>
                <form name="form2" method="post" action="addtocart.php" >
                <input name="id" type="hidden" value="<?php echo $dataArray[1][0];  ?>" />
                <input name="name" type="hidden" value="<?php echo $dataArray[1][1];  ?>" />
                <input name="price" type="hidden" value="<?php echo $dataArray[1][2];  ?>" />
                <input name="image" type="hidden" value="<?php echo $dataArray[1][6];  ?>" />
                
                <tr>
                <td><img src="pImages/<?php echo $dataArray[1][6];  ?>" height="200px" width="100px" /></td>
                <td>Name: <?php echo $dataArray[1][1];  ?><br />
                Price: <?php echo $dataArray[1][2];  ?>
                <br />
                Color: <?php echo $dataArray[1][3];  ?>
                
                Description: <?php echo substr($dataArray[1][4],0,100);  ?>......
                
                <br />
                <input type="submit" name="sub" value="Add to cart" />
                </td>
                
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
