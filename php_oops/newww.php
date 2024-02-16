<?php
$a=['name'=>'abhishek','class'=>'xyz','rollno'=>'1','admin'=>'h'];
// $c=count($a);
foreach($a as $key=>$value)
{
    if($key=='rollno')
    {
        continue;
    }
    else 
    {
    $ar[$key]=$a[$key];
    }
}
print_r ($ar);  