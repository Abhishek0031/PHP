<?php
 class user
{   
   protected $username;
   public function get()
   {
      $this->username="ABHISHEK";
   }
   public function set()
   {
      return $this->username;
   }
}


$obj=new user;
$obj->get();
echo $obj->set();
