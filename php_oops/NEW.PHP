<?php
$ar=["hello"=>"bye","1"=>"2","test"];
$arr=['a','b','c'];
$test=array_combine($ar,$arr);
$tes=array_merge($ar,$arr);
print_r($test);
echo"<br>";
print_r($tes);
foreach($ar as $l)
{
print_r($l);
echo $l;


// sphpinfo();
}
$a = 1_234_567;
echo "<br>".$a;
$b = 057;
echo "<br>".$b;
$large_number = 2147483647;
var_dump($large_number);                     // int(2147483647)

$large_number = 2147483648;
var_dump($large_number);                     // float(2147483648)

$million = 100000000000000;
$large_number =  50000 * $million;
var_dump($large_number);
echo "<br>";
echo (int) ( (0.1+0.7) );
echo (int) ( (0.1+0.7) * 10 );
$c=" HELLO WORLD";
var_dump( strpos($c,'   '));
echo "<br>";
echo PHP_INT_MAX;
echo "<br>";
echo PHP_INT_SIZE;
echo "<br>";

