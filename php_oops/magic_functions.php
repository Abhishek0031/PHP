<?php 
class student{
    private $name;
    private function method($s)
    {
        $this->name=$s;
    }
    //set magic method
    public function __set($property,$name)
   { echo "non existing functions  $property:$name";
   }
   //call magic method
   public function __call($helo,$arg)
{
   //    { if(method_exists([$this,$helo],$arg))
//     {
//         $this->method("my name is abhishek");
//     }
//     else
    $this->method("abhishek");
    echo "<br>"."call function is invoke:  ".$helo;
   
}
}
$obj=new student;
$obj->name="magic set";     // set magic constant is invoke
$obj->method("abhishek");   //call function is invoke
echo"<br>";
print_r($obj);