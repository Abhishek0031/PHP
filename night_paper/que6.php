<?php
// error_reporting(0);
$a=[1,2,8,4,5];
print_r($a);
$pos=3; 
$count=0;
$ele=9;
for($i=0;$a[$i]!=NULL;++$i)
{ 
    global $count;
    $count++;
}
echo $count;

for($i=($count);$i>=$pos;--$i)
{  
    if($i==$pos)
     {
        // $ele=6;
        $a[$i]=$ele;
     }
     else 
     {
    $a[$i]=$a[$i-1];
     }
}

echo "<pre>";
print_r($a);
echo "<pre>";


?>