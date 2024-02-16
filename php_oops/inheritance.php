<?php
class country
{static function dd()
    {
        echo "base";
    }
     public $country_name="hello";
     function __construct()
     {
        $country_name="haryana"; 
     }
     //override in derive class
     public function setcn($name)
     {
         $this->country_name=$name;
         echo  $this->country_name;
     }
}       

//$india = new country();
//$india->setcn("INDIA");

class state extends country
{   static function dd()
    {
        echo "derive";
    }
    public $state_name;
     public function setsn($n){
        $this->country_name="INDIA";
        $this->state_name=$n;
        echo $this->country_name."<br>".$this->state_name;
    }
    public function setcn($name)
    {
        $this->state_name=$name;
        echo  $this->state_name."<br>";
    }
}

$s= new  state();
//$obj=new country();
$s->setcn("india");
state::dd();
country::dd();  
?>

