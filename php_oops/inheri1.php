<?php 
class parents 
{
protected $avg;
// public $c;
public $a;
public $b;
public static function dd()
{
    echo "base";
}

public function sum()
{
   $c=$this->a+$this->b;
    
   return $c;
}
}

class child1 extends parents
{
  protected $s="my sum is:";
  protected $s1="averag of no.'s is:";  

 static function dd()
{
    echo "derive";
}

}

class  child extends child1
{ 
    protected $per;

    public function averag()
    {   echo $this->s;  
        echo $this->sum();
        $this->avg=($this->sum())/2;
        echo "<br>".$this->s1;
        return $this->avg;
    }
    public function __construct($a,$b)
    {
    $this->a=$a;
    $this->b=$b;
    }
}

$obj=new child(20,30);
//echo $obj->sum()."<br>";
echo $obj->averag();
// echo $obj->avg;
child::dd();

?>