<?php
$a=['name'=>'abc','id'=>'12','rno'=>'3'];
$temp=[];
foreach($a as $key=>$value)
{
    $temp[$value]=$key;
}
echo '<pre>';
print_r($temp)


?>