<?php
$a=10;
$b=20;
$c=5;
$d=15;
function swa_val($c,$d)
{
    $temp=$c;
    $d=$c;
    $c=$temp;
    
    
}
function swap_ref(&$a,&$b)
{
    $temp=$b;
    $b=$a;
    $a=$temp;
    
}
swap_ref($a,$b);
echo $a;
echo '<br>';
echo $b;
echo '<br>';

swa_val($c,$d);
echo $c;
echo '<br>';
echo $d;

?>