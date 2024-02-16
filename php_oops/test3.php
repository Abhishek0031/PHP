<?php
 class Base 
 {
    protected static function whoAmI() 
    {   
        echo self::class;
    
    }

    public  static function disp()
    {
        self::whoAmI();
    }
  }

class Derived extends Base {
    protected static function whoAmI() 
    {
        echo static::class;
        echo __CLASS__;
    }   

    public  static function disp()
    {
        static::whoAmI();
    }
}

Derived::disp();
// Base::disp();


?>