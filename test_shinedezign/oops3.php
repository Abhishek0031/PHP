<?php
class student
{
    private $name;
    private static $age=0;
    // public static $ans=0;
    private static $totalStudent;
    public function __construct($n,$a)
    {   
      //  $this->ans=0;
        $this->name=$n;
        // self::$age=$a;
        self::$totalStudent++;
        self::$age+=$a;
    }

     public static function GetAverageAge()
    {  
      
      return (static::$age)/self::$totalStudent;
    }
     
    

}


$a= new student("abhishek",20);
$b= new student("harsh",21);
echo "<pre>";
print_r($a);
print_r($b);
echo "<pre>";
echo "<br> avg of no. is:   ".student::GetAverageAge();