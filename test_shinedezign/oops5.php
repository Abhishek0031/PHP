<!-- when we  create the same name method in multiple trait and all that traitis use in the class and that 
class have a method with similar name of trait then the class function is called and 

if there is no similar function is present in class where the all trait is use then it returns an error

(Fatal error: Trait method B::commonmethod has not been applied as Myclass::commonmethod, because of collision
 with A::commonmethod in C:\xampp\htdocs\php\test_shinedezign\oops5.php on line 36)

when we have same method in class then out put is:-
output:-
 Myclass(class)
-->
<?php

trait A 
{
  function commonmethod()
  {
    echo "trait A";
  }
}

trait B 
{
  function commonmethod()
  {
    echo "trait B";
  }
}
trait C 
{
  function commonmethod()
  {
    echo "trait C";
  }
}


class Myclass   
{ 
 use A,B,C;


 public function commonmethod()
  {
    echo "Myclass class";
  }
}

$obj=new Myclass();
$obj->commonmethod();


?>