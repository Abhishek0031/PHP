<?php
abstract class User 
{
    abstract public function stateyourrole();
}

//inherit parent class(User) to define abstract class 
class child extends User
{
    public function stateyourrole()
   {
    echo "<center>----ABHISHEK----</center>"."<br>";
    echo "-Work as PHP Dntern in ShineDesign";
     
   }
}
$obj=new child;
$obj->stateyourrole();