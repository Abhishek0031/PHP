<?php
$n=5;
for($i=0;$i<$n*2;++$i)
{
for($j=0;$j<$n;++$j)
{
   if($i>$j && $i<=$n)
   {
    echo "* ";
   } 
   else if(($i-$n-1)<$j && $i>$n)           
   {
    echo "* ";
   }
} 
echo"<br>";
}



echo "second method"."<br>";
for($i=0;$i<$n-1;++$i)
{
    for($j=0;$j<$n;++$j)
{
   if($i>$j)
   {
    echo "* ";
   } 
}

echo"<br>";
}
for($i=0;$i<$n;++$i)
{for($j=0;$j<$n;++$j)
{
   if($i<$j)
    echo "* ";
}
echo"<br>";



}



