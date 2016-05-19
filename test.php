<?php

$a=1;
$b=2;
$c=3;
echo ${$a}[$b][$c];

mysql_connect('localhost','root','');
mysql_select_db('flood');
$rs  = mysql_query("select * from test");

$dataTimeline = array();

while($row = mysql_fetch_assoc($rs)){

  /* Print all values
  
     echo "<br> it = ". $row['Item_name'];
     echo "<br> p = ".$row['Punjab'];
     echo "<br> S = ". $row['Sindh'];
     echo "<br> B = ".$row['Balochistan'];
     echo "<br> k = ".$row['KPK'];
     echo "<br> gb = ". $row['GB'];
     echo "<br> ajk = ".$row['AJK'];
	 
	 */
	 // Put all values in temp array
	 
      $dataTemp = array($row['Item_name']=> array(
                       'AJK' => $row['AJK'],
                       'Sindh' => $row['Sindh'],
                       'KPK' => $row['KPK'],
                       'Punjab' => $row['Punjab'],
                       'Balochistan' => $row['Balochistan'],
                       'GB' => $row['GB']))   ;

 array_push($dataTimeline,$dataTemp);
}

// print all values
//print_r($dataTimeline);

echo "<br> wash ajk = ".$dataTimeline[0]['wash']['AJK'];
echo "<br>wash sindh".$dataTimeline[0]['wash']['Sindh'];


echo "<br>Food ajk".$dataTimeline[1]['Food']['AJK'];
echo "<br>Food sindh".$dataTimeline[1]['Food']['Sindh'];




for($i = 0; $i <count($dataTimeline); $i++){
echo "<br> wash ajk = ".$dataTimeline[$i]['wash']['AJK'];
}

?>