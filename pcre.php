<?php
$foods = array("pasta","steak","fish","potatos","Pepsi","7up");

$food = preg_grep("/p?/",$foods);

print_r($food);


$line = "+Jason+++Gilmore+++++++++columbus++++Ohio*usa";


$output = preg_split("/\*{1,}/",$line);

print_r($output);

if(preg_match("/[@#]/","Mark@#123")){
  echo "<br><br>username incorrect  space not allowed";
}else{
  echo "<br><br>username correct";

}



?>