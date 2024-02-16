<?php
class greeting 
{
public static $a;
public static function inti()
{
self::$a=10;
}

public static function fun()
{
    // self::$a=10;
    echo self::$a."<br>";
  self::$a++;

  }
 
  public static function welcome() {
    //echo "Hello World!";
    self::fun();
  }
}
//$obj=new greeting();
// Call static method
greeting::inti(10);
greeting::welcome();
greeting::fun();
?>