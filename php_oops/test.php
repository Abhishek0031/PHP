<?php

class p{
     protected $name="a" ;
     public $clas="x";

}
class c extends p
{      
    // protected $clas="b" ;
    public $name="l";

    public function disp()
    {   
        echo $this->name ;
    }
}
$o=new c;
echo $o->name ;  
echo $o->clas;
?>