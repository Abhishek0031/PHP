<?php
class base 
{
    function __construct()
    {
        echo "base const<br>";
    }
    function __destruct()
    {
        echo "base destruct <br>";
    }
}
class derive extends base
{
    function __construct()
    {   
        parent::__construct();
        echo "derive const<br>";
    }
    function __destruct()
    {   
        echo "derive destruct <br>";
    }

}



$obj= new derive();
?>