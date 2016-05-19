<?php
include("dbconnect2.php");


if(count($_POST)){
		$search = $_POST['search'];
		
		$search = htmlentities($search);
		$search = mysql_real_escape_string($search);
		echo $sql = "select * from tblcategory where cname like \"%$search%\"";
		$rs = mysql_query($sql);
		$row = mysql_fetch_row($rs);
		echo $row[0];
	}




?>
<html>
<body>
<form  method="post" name="fom1" />
 

<input name="search" type="text">
<input type="submit" name="sub" value="search" />

</form>

</body>
</html>