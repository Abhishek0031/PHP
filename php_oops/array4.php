<?php
// error_reporting(0);
$a=[1,2,8,4,5,6];
$temp=[];

$new1=[];
$new2=[];
$pr=[];


for($i=0,$j=3; $i<3&&$j<6; ++$i,++$j)
{ 
    $temp[$a[$i]]=$a[$j];
}
echo "<pre>";
print_r($temp);
echo "<pre>";


//second method

for($i=0; $i<6; ++$i)
{ 
    if($i<3)
    {
        $new1[$i]=$a[$i];
    }
    if($i>=3)
    {
        $new2[$i]=$a[$i];
    }
}
for($i=0; $i<3; ++$i)
{ 
    $pr[$new1[$i]]=$new2[3+$i];
}


echo "<pre>";
print_r($pr);
echo "<pre>";




?>