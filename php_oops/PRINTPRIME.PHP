<?php

$j=3;
while($j<100)
{
$i=2;
$pos=0;
while($i<=$j/2)
{
    if($j % $i==0)
{
$pos=1;
break;
}
$i++;
}
if($pos==0)
echo $j."<br>";
$j++;
}
?>   