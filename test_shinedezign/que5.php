<!-- 
    a)REGULAR  CONSTANT:-
    REGULAR  CONSTANT THOSe CONSTANT WHICH IS DEFINE BY USER USING define( string_name , value ,case_insensitive ])
    --we cann't use $(sign with define variable)
    if we can try to update the constant variable it can return an error
    
    
    magic constant 
    are pre define constant in php which return some values 
    we can write the magic constant with starting and ending with double_underscore(__)

 -->
<?php
define( "val",20);      //b)creating regular constant
// CONST A=5;
// val=val+1;
echo val;
// echo A++;
echo "<br>magic constant<br>";


echo __LINE__;
echo "<br>";
class abhishek
{ use TRAIT_NAME;
    function disp()
    {
        echo __CLASS__;
        echo "<br>";
        echo __METHOD__;
        echo "<br>";
    }
}
trait TRAIT_NAME
{
    function tdisp()
    {
        echo __TRAIT__;
        echo "<br>";
        echo __METHOD__;
        echo "<br>";

    }
}

$obj=new abhishek;

$obj->tdisp();
$obj->disp();
?>