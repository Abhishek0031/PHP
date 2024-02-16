<?php
class ParentClass {

    protected static $a;

    protected static function parentMethod() 
    {
        echo "This is the parent method."; //. PHP_EOL

        echo self::$a=5;
    }

}

class ChildClass extends ParentClass {
    //protected static $a=3;

    protected static function childMethod() 
    {
        parent::parentMethod();

        echo " <br>";
        echo "This is the child method." ;
         //$a=3;
        echo parent::$a;
    }

}
class GrandChildClass extends ChildClass {

    public static function grandChildMethod()
    {
        parent::childMethod();

        echo " <br>";

        echo "This is the grandchild method.";

    }

}
// Calling the static method of the grandchild class

GrandChildClass::grandChildMethod();