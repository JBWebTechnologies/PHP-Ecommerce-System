<?php
//step one Connect with server

$link = mysql_connect("localhost","root","")  or die("cannot connect");


// step2 select db
 mysql_select_db("evswebdev71",$link);

$sql = "alter table tbladmin add column joined datetime";
 
 //step run query 
 
 if(mysql_query($sql)){
 
  echo "Query completed sucessfully!!!!!!!";
 
 }else{
 	echo "Erro in query";
 
 }
 








?>