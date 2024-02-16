<?php
abstract class parents
{  
   function hel()
   {
      echo "hello";  
   }

   abstract protected  function ans($a,$b);
    function display($a,$b)
    { 
      $x=$a;
      $y=$b;
      echo $this->ans($x,$y);
    }

}

/*if we have an protected abstract function in parents class 
   then we can make it as puclic in child class
                            and
   if we have an public abstract function in parents class 
   then we cann't make it as protected in child class                          

*/
class derive extends parents
{ 
// private $c;

public function ans($x,$y)
{
   $c=$x+$y;
   return $c;
}

public function disp($x,$y)
{
   $l=$x;
   $m=$y;   
   return $this->ans($l,$m);   
}

}



// class derive1 extends parents
// { 
// private $c;
// public function ans($x,$y)
// {
//    $this->c=$x-$y;
//    return $this->c;
// }
// }


   // $ll=new parent();
   // $ll->hel();

$sum=new derive;
echo "addition of no.=";
echo $sum->disp(10,20)."<br>";

// $dif=new derive1;
// echo "addition of no.=";
// echo $dif->display(10,20)."<br>";
// echo "Diffrence of no.'s=".$dif->display(10,20);
?>