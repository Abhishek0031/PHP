<?php
$ar=["1"=>2,"2"=>4,"3"=>5,"4"=>3,"5"=>6];
foreach($ar as $n)
echo $n."<br>";
echo " pop an element from the end"."<br>";
array_pop($ar);
echo"<br>";
foreach($ar as $n)
echo $n."<br>";
array_reverse($ar);
echo"<br>";
foreach($ar as $n)
echo $n."<br>";
echo "check array element"."<br>".in_array(2,$ar)."<br>";
asort($ar);
echo "sorted  array"."<br>";
foreach($ar as $n)
echo $n."<br>";
echo "keys points at  array"."<br>";

echo key($ar)."<br>";
echo " current element in array"."<br>";

echo pos($ar)."<br>";

echo " no. of element in array"."<br>";
echo count($ar)."<br>";
array_push($ar,10);
echo " push an element at the end"."<br>";
foreach($ar as $n)
echo $n."<br>";
array_slice($ar,2);
echo " array from theird element"."<br>";
foreach($ar as $n)
echo $n."<br>";
