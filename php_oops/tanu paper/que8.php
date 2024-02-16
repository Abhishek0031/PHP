<?php
error_reporting(0);
$str="abhishek";
$count=0;
for($i=0;$str[$i]!=NULL;++$i)
 {  global $count;
     $count++;
 }
 echo "length:$count";
?>