<?php
class A 
{
    private function __construct()
    {
        echo "private construct";
    }

    public static function  disp()
    {
        return new self();      // or we can write  return new A 

    }
}

A::disp();

?>