<!-- in self
           the class call the itself variable or function  definition 
        
        in parent 
              it is use when we inherit the properties and we can use parent in in derive class only otherwise an 
             error is occur
        in static 
               we can call according to the class reffrence when we use atatic if we are call variable or function using 
            base refrence then base class values  is invoke and if we call variable or function using 
            base refrence then derive class values  is invoke-->
<?php
class base 
{
  static $a=10;
//   static function disp()
//   {
    
//     echo static::$a; 
//   }
}
class derive extends base 
{
     public static $a=20;
   static function di()
   {
    echo " here the value call of the itself class :".self::$a."<br>";
    echo " here the value call the parent class :".parent::$a."<br>";
    echo " here the value call according to the class refrence of class   :".static::$a."<br>";

   }

}
derive::di();

// base::disp();



