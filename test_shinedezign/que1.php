<?php
// static $a =10;
function disp()
{
    static $a =10;
    $a++;
    return $a;
}

function normdisp()
{
    $a =10;
    $a++;
    return $a;
}
//static variable pic the last updated value and working with memory space
echo "static display"."<br>" ;
echo disp()."<br>";
echo disp()."<br>";
echo disp()."<br>";
echo "normal variable display display"."<br>"    ;
echo normdisp()."<br>";
echo normdisp()."<br>";
echo normdisp()."<br>";

