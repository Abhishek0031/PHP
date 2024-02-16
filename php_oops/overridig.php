<?php
class a 
{
    public $A=10;
    public function test($A)
    {
        echo $A."<br>";
    }
}
class b extends a
{
        protected $B=5;
    public function test($B)
    { parent::test(5);
        echo $B;
    }
}
$obj=new b;
$obj->test(8);
