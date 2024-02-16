<?php
// error_reporting(0);
$array = array(7,10,2,65,35,80,25);
echo "<br>"; 
echo "<br>";

echo "<pre>";
print_r($array);
echo "<pre>";

$temp=0;
for ($i=0; $i<6; $i++)
{
   for ($j=$i+1; $j<7; $j++)
   {
        if($array[$i]>$array[$j])
        {$temp=$array[$i];
        $array[$i]=$array[$j];
        $array[$j]=$temp;
        // break;
        }
   }
}
print_r($array);  

for($i=1;$i<=5;$i++)
{
    for($j=4;$j>=$i;$j--)
    {
        echo "&nbsp;";
    }
    for($k=1;$k<=$i;$k++)
    {
        echo"* ";
    }
    $i++;
    echo"<br>";
}
      




