<?php
/*we are using encapsulation for the 
protection of important data.

-it keeps the data and the code safe 
external interference.*/

class encapsulate
{
    private $name;
    private $age;
    public function __construct($n,$a)
    {
        $this->name=$n;
        $this->age=$a;
    }
    public function disp()
    {
        echo "$this->name is $this->age old";
    }
} 
/*the data members and their properties 
are not accessible to the outer end user
so they cannot change the properties*/
$obj=new encapsulate("Abhishek",20);
$obj->disp();
?>