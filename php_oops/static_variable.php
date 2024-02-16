<?php
static $a=5;
function abc()
{
   global $a;
   $a=$a+10;
    echo $a;
}
echo $a;
abc();
echo $a;    