<?php
error_reporting(0);
$a=[1,2,6,9,3,4,2,5,6,7,2,8,0,2];

function count_val($a,$ele)
{$count=0;
    for($i=0;$i<=14;++$i)
     {
       if($a[$i]==$ele)
       {  $count;
          $count++;
       }
     }  
     echo "number of $ele is:".$count."<br>";   

}
count_val($a,2);
count_val($a,1);


?>