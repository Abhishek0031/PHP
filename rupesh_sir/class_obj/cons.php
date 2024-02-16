<?php

class ParentClass {
    protected function __construct() {
        echo "Parent constructor called.";
    }
     
    protected function __destruct()
    {
        echo "<br>parent destruct ";
    }

}


class ChildClass extends ParentClass {
    private function __construct() {
        parent::__construct();  // Call the parent constructor.
        echo "<br>Child constructor called.";
    }
    protected function __destruct()
    {  parent::__destruct();
        echo "<br>child destruct ";
    } 


    public static function pri()
    {
        echo "<br>function call<br> ";
        return new self();
    }

}

ChildClass::pri();
// $child = new ChildClass(); 
