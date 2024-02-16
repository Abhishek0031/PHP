<?php
 abstract class User 
{  
     protected $name;
     function __construct($s)
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
class child extends USER
{ 
   
    
   
    
    public function stateyourrole():string
   {
    return "Admin"; 
   }
}
/*when we have constructor in bath base or derive class then
derive class constructor is invoke, But if we have constructor in 
base class the base class constructor is invoke with the object
of derive class;*/
$obj=new child("abhishek");
// $obj->_set("--Balthaza--");
echo "<center> <h1>".$obj->stateyourrole()."</h1></center>";
echo "<center> ".$obj->_get()."</center>";






