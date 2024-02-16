<?php
  $start = 2 ;
  $end = 100;
  $flag=0;
  function prime($start , $end){
    global $flag;
    $flag=0;  
    if($start==$end)
    {
      return ;
    }
    else{
      for($i=2;$i<$start;$i++){
        if($start%$i==0){
           $flag=1;
        }
      }
    }
    if($flag==0){
      
      echo $start;
      echo "<br>";
    }
      $start++;
       return prime($start , $end);
    
  }


  prime(2,100); 
