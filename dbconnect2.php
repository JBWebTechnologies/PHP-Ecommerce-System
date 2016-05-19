<?php


  
//Dataabse connection information;

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "evswebdev71";

/// connect to server
$link = mysql_connect($host,$user,$pass) or die ("Cannot connect to Server");

// select db

mysql_select_db($dbname) or die("Connot select database!!!");



?>