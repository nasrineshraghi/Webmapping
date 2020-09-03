<?php




$deg = $_GET['lat11'];
$min = $_GET['lat12'];
$sec = $_GET['lat13'];

  
$dec = $deg + ((($min * 60) + ($sec)) / 3600);
  

 
echo $dec;



?>


