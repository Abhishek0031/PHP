<!-- inheritance means the sharing properties of parent to the childd -->

<?php 

 interface  shape 
 {
    function calculate ();
   
 }


 interface  color 
 {
    function getcolors ();
   
 }

 class rectangle  implements shape , color
 {
    public $l;
    public $b;
    public $c;
    function __construct($x,$y,$z)
    {
        $this->l=$x;
        $this->b=$y;
        $this->c=$z;
    }
function  calculate()
    {
       return $this->l*$this->b;
    }
        function getcolors ()
        {
            return $this->c;
        }
 }

 $obj= new rectangle(5,10,"black") ;
 echo "area of rectangle:".$obj->calculate()."<br>";
 echo "color of rectangle:". $obj->getcolors()."<br>";
 $obj->getcolors();
?>