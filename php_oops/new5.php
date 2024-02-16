<?php
$x=10;
function show(){
    // global $x;   
    $x=12;
    echo $x;
}
show($x);
echo $x;

?>