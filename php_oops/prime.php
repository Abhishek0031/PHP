<?php
$num=4;
$i=2;
$pos=0;
while($i<=$num/2)
{
    if($num % $i==0)
{
$pos=1;
break;
}
$i++;
}
if($pos==0)
echo "prime no.";
else
echo "not prime no.";
?>   