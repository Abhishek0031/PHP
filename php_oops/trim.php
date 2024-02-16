<?php
$variable = "SHINEDEZIGN";
// echo $variable[0];
$x="";
for($i=0;$i<strlen($variable);$i++){
    $x.= $variable[$i]."-";
}
echo "<br>";
echo rtrim($x,'-');
//     

// print_r($x);