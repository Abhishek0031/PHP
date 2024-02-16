<?php
interface base
{
    public function sum();
}

class child implements base
{
public $c;
public $a;
public $b;

public function __construct($x,$y)
{
    $this->a=$x;
    $this->b=$y;    
}
public function sum()
{
   $this->c=$this->a+$this->b;
   return $this->c;
}
}
$obj=new child(10,50);
echo $obj->sum();
?>

