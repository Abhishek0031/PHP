<?php
error_reporting(0);
$str="abhishek";

for($i=0;$str[$i]!=NULL;++$i)
 {    
    if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'||
    $str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str[$i]=='U')
     {
        echo $str[$i]."<br>";
     }
}
?>