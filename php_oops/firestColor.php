<?php

// declare(strict_types=1); 
$str='hello php pool';

for($i=0;$i<strlen($str);++$i){
    if($str[$i]==' '){
        echo "<span style='color:red'> ".$str[$i+1]."</span>";
        $i++;
    }else if($i==0)
    {
        echo "<span style='color:red'> ".$str[$i]."</span>";
    }else{
        echo "<span>".$str[$i]."</span>";
    }
}
?>