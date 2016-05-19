<?php
 $stock = array('msft'=>30.0,'orcl'=>18.9,'goog'=>601.00);
 
 //server address;
 $address = '127.0.0.1'
 $port = 7001;
 $sock = socket_create(AF_INET,SOCK_STREAM,getprotobyname('tcp'));
  socket_bind($sock,$address,$port) or die ("Cant bind");
  echo socket_strerror(socket_last_error());
  socket_listen($sock);
  $client = socket_accept($sock);
  $input = socket_read($client,1024);
  $ticker = ereg_replace("[ \t\n\r]","",$input);
  echo "ticker = $ticker";
  
  if(array_key_exists($ticker,$stocks)){
  	 $price = $stock[$ticker];
  }else{
     $price = "no such symbol";
  }
    
	
$socket_write($client,$price,	
  
 
 


?>