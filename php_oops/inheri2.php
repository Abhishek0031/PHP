<?php
class parents
{
  public $a;
  public $b;
  public function __construct($x,$y)
  {
    $this->a=$x;
    $this->b=$y;
  } 

  public function disp()
  {
    echo $this->a."<br>";
    echo $this->b."<br>";
  }

  public function __destruct()
  {
    echo "in distructor";
    //unset($this->a,$this->b);
  }
}
$obj=new parents(10,20);
$obj->disp();
unset($obj);
echo"<br>"."values affter unset------";
$obj->disp();
?>