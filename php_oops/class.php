<?php
class A
{

    public $name;
    public $age;

    public function __construct($s)
    {
    $this->name="abhishek";
    $this->age=$s;
     //echo "constructor";
    }
    public function disp()
    {//echo " function1";
         echo $this->name."<br>".$this->age."<br>";
    }
    
}
$obj=new a(10);
$ob =new a(20);
$ob=$obj;
$obj->disp();
$ob->disp();
 //$obj->disp(10);
?>