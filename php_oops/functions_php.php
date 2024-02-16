<?php 
$a=20.5;
$c=[4,5,6,5,8];
$constraints = array('1<x','x<5','y>4');
echo "<pre>";
print_r($constraints);
echo "<br >";
// echo $constraints;
echo "<br >"; echo"<pre>";
var_dump($constraints);
echo "converted to greater integer:-----".ceil($a)."<br >";
echo "converted to lower integer:-----".floor($a)."<br >";
echo "convert according to decinal point:-----".round($a)."<br >";

//exit("execution terminated in exit function");
// die("execution terminated in die dunction");
// echo file_put_contents("read.txt","I am working as php intern in shinedezign.",FILE_APPEND);
//echo file_get_contents("read.txt",false,NULL,5,15);
echo "<br >"."cheack the variable is empty or not:-----".empty($b)."<br >";
echo "cheack the variable is empty or not:-----".empty($a)."<br >";
echo "count the listed elements :-----".count($c)."<br >";
echo "give absolute value -ve term converted into +ve:-----".abs($a)."<br >";
echo "return the minimum element in array:-----".min($c)."<br >";
echo "return the exponential power of a no.:-----".pow($a,3)."<br >";
echo "generate a randem integer no.:-----".rand()."<br >";
echo "find the square root of a no.:-----".sqrt($a)."<br >";



?>      