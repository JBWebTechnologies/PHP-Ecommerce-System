<?php
      /***********************
	  
	   mysql_fetch_row();
	   mysql_fetch_object();
	   mysql_fetch_assoc();
	   mysql_fetch_array();
	  
	  ************************/
	  
	  require_once('dbconnect.php');
	  ///////////////////////////////////
	  $rs = "";
	  
	  $sql = "select * from tblcategory ";
	  
	  
	  $rs = mysql_query($sql);
	  
	  $totalrec = mysql_num_rows($rs);
	  
	  if($totalrec >0){
	  		echo "<h2>Catgeories</h2>";
	     /*while($row =  mysql_fetch_row($rs)){
		 	
			echo "<br>Id = ".$row[0];
		 	echo "<br> Name = ".$row[1];
		 	echo " <br>Image ".$row[2];
			echo "<br><br>";
		}

	while($row =  mysql_fetch_array($rs)){
		 	
			echo "<br>Id = ".$row[0];
		 	echo "<br> Name = ".$row[1];
		 	echo " <br>Image ".$row[2];
			echo "<br><br>";
		}*/


/*while($row =  mysql_fetch_object($rs)){
		 	
			echo "<br>Id = ".$row->id;
		 	echo "<br> Name = ".$row->cName;
		 	echo " <br>Image ".$row->cImg;
			echo "<br><br>";
		}*/
		
		while($row =  mysql_fetch_assoc($rs)){
		 	
			echo "<br>Id = ".$row['id'];
		 	echo "<br> Name = ".$row['cName'];
		 	echo " <br>Image ".$row['cImg'];
			echo "<br><br>";
		}


		  
		
	  
	  }	  
	    
	  
	  
	  
	  
	  
	  
	  
   



?>