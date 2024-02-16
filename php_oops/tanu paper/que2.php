<?php
$str="SHINEDEZIGN";
$X='';
 for($i=0;$i<strlen($str);++$i)
 {
     $X.=$str[$i].'-';
 }
 print_r( rtrim($X,'-'));
 
?>
