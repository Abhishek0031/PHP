<!-- we have thre access modifiers in php
     private(cann't be access outside the class And not to be inherit in other class)
     protected(cann't be access outside the class And but it can be inherit in other class)
     public (it can be access at any part of that program with the help of object))


     visibility of the access modifiers during inheritance is
     private(note inherit)
     protected(also protected in derive class)
     public(public in derive class)
     -->
<?php
class parent_class
{
    private $a;
    protected $b;

    function __construct()
    {
        $this->a=0;
        $this->b=0;
    }
    public function sum($x,$y)
    {
        $z=$x+$y;
        return $z;
    }
    public function avg($s)
    { 
        $a=$s/2;
        return $a;

    }
}
$obj = new parent_class();
$m=$obj->sum(5,10);
echo "sum is:".$m."<br>";
$l=$obj->avg($m);
echo "avg    is:".$l."<br>";
