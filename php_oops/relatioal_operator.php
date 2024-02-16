<?php
$a=100;
$b=20;
$c=$a<$b;
$d=$a>$b;
$e=$a<>$b;
$f=$a==$b;
echo "your output is:",$c.'<br>';
echo "your output is:",$d.'<br>';
echo "your output is:",$e.'<br>';
echo "your output is:",$f.'<br>';
echo "your output is:",($c and $d).'<br>';
echo "your output is:",($d and $e).'<br>';

//echo "a>b:",$a>$b;

?>