<?php
trait sum 
{
    public $a,$b;
    public function add($a,$b)
    {
        $pr=$a+$b;
        return $pr;
    }
}
trait info 
{
    public function display()
    {
        echo "sum of no. is:";

    }
}
class  output
{
  use sum,info;
    
}

$obj=new output;
$obj->display();
echo $obj->add(10,20);