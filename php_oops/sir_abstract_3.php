<?php
abstract class User 
{   protected $a;
    public function userrole($s)
    {
      $this->a=$s;
    }
    abstract public function stateyourrole():string;
}

//inherit parent class(User) to define abstract class 
class child extends User
{
    public function stateyourrole():string
   {
    return $this->a; 
   }
}
$obj=new child;
$obj->userrole("Admin");
echo $obj->stateyourrole();
