<?php
abstract class User 
{   protected $name;
    public function __construct($s)
    {
        $this->name=$s;
    }
   
    public function _set($s)
   {
      $this->name=$s;
   }
   
   public function _get()
   {
      return $this->name;
   }
 
 
    abstract public function stateyourrole():string;
}

//inherit parent class(User) to define abstract class 
class child extends User
{
    
    public function stateyourrole():string
   {
    return "Admin"; 
   }
}
$obj=new child("abhishek");
$obj->_set("--Balthaza--");
echo "<center> <h1>".$obj->stateyourrole()."</h1></center>";
echo "<center> ".$obj->_get()."</center>";
