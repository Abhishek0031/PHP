<?php
$n=8;
echo "----pattern 1----"."<br>";  
for ($i=0; $i<5; $i++)
{
for ($j=0; $j<=$i; $j++)
{
    echo "* ";
}
echo "<br/>";
}

echo "<br>"."<br>";


echo "----pattern 2----"."<br>";  
   
for ($i=0; $i<5; $i++)
{
    echo "<br/>";
    for ($j=0; $j<5; $j++)
{ 
    if ($j>=$i)
    echo "* ";
    else 
    echo " ";
}
}


echo "<br>"."<br>";


echo "----pattern 3----"."<br>";  
   
for ($i=0; $i<=5; $i++)
{
    
    for ($k=0; $k<$i; $k++) 
       print "&nbsp";
    
   for ($j=0; $j<=5; $j++)
{ 
    if ($j<$i)
    print "&nbsp";
    else 
    print "*";
    echo "&nbsp";
}
echo "<br/>";
}

echo "<br>"."<br>";
echo "----pattern 4----"."<br>";  

for ($i=0; $i<5; $i++) 
{
    
    for ($k=0; $k<5-$i; $k++) //for space
       echo "&nbsp&nbsp";
    
    for ($j=0; $j<=$i; $j++)  //for element
      { 
        print "&nbsp*";
        echo "&nbsp";
      }
echo "<br/>";
}
 

echo "<br>"."<br>";
echo "----pattern 5----"."<br>";  

for ($i=0; $i<5; $i++) 
{
    
    for ($k=1; $k<=$i; $k++) 
       echo "&nbsp&nbsp";
    
    for ($j=5; $j>$i; $j--)
      { 
        print "&nbsp*&nbsp";
        // echo "&nbsp";
      }
echo "<br/>";
}
 

echo "<br>"."<br>";
echo "----pattern 6----"."<br>";  

for($i=0;$i<5;++$i)
{
   for($j=0;$j<5;++$j)
{
   if( $i==0|| $j==0||$i==4||$j==4)
   {
     echo "  *  ";
   }
   else 
   {    
      echo " &nbsp&nbsp";
   }
}
echo"<br>";



}

echo "<br>"."<br>";
echo "----pattern 7----"."<br>";  



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


echo "<br>"."<br>";
echo "----pattern 8----"."<br>";  
echo "<br>";
for ($i=0; $i<$n; $i++)
{
for ($j=0; $j<$n; $j++)
{ 
    if($i==$j||$i==$n-1||$j==0)
    {
    echo " * ";
    }
   else 
  {
   echo "  &nbsp&nbsp";
 }
}
echo "<br/>";
}




echo "<br>"."<br>";
echo "----pattern 9----"."<br>";  
echo "<br>";
for ($i=0; $i<$n; $i++)
{
for ($j=0; $j<$n+1; $j++)
{ 
    if(($i+$j)==$n/2||$i==$n/2||(($i)*2+($n/2)==$i+$j&&$i!==$j))
    {
    echo " * ";
    }
   else 
  {
   echo "  &nbsp;&nbsp;";
 }
}
echo "<br/>";
}

echo "<br>"."<br>";
echo "----pattern 10----"."<br>";  
echo "<br>";
for ($i=0; $i<$n; $i++)
{
for ($j=0; $j<$n; $j++)
{ 
   
}
echo "<br/>";
}


echo "<br>"."<br>";


echo "----pattern 11 ----"."<br>";  
   
   for ($i=0; $i<5; $i++)
   {
      echo "<br/>";
      for ($j=0; $j<5; $j++)
   { 
      if ($j+$i<4)
      {
      echo "&nbsp;&nbsp;";
      }
      else 
      {
         echo "*";
         }
   }
   }

   echo "<br>"."<br>";


   echo "----pattern 11 ----"."<br>";

   for($i=1;$i<=5;$i++)

{

    for($j=4;$j>=$i;$j--)

    {

        echo "&nbsp;&nbsp;";

    }

    for($k=1;$k<=$i;$k++)

    {

        echo"* ";

    }

    $i++;

    echo"<br>";

}
  ?>  




