<?php
error_reporting(0);
$ar=[1,2,3,4,10,12,51,25,5,6,32,25];
static $ans=0;
for($i=0;$ar[$i]!=NULL;++$i)
{  global $count;
     $count++;
}  

function sum($l,$r)
{ 
     $ans=0;
    global $count;  
   for($i=0;$i<$count;++$i) 
   { global $ar;
    $m=0;
      
    if($ar[$i]==$l)
    {
        $m=$i;  
        
    }

    if($ar[$i]==$r)
    {
        $n=$i+1;
        
    }
       
}

for($j=$m;$j<=$n;++$j)
{  
if($j==$n)
    {
        return $ans;
    }
   $ans +=$ar[$j];
    
   
   
}




}
    echo "Sum of elements is:  ".sum(1,10);
