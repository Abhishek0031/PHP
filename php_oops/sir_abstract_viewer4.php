<?php
 abstract class user
{
    abstract function printname();
    abstract function printrole();
}

class viewer extends user 
{
     function printname()
    {
        echo "<center><h4>ABHISHEK</CENTER><h4>";

    }
     function printrole()
    {
        echo "<center><h5>------PHP Intern------</CENTER><h5>";
        
    }
}
$obj=new viewer;
$obj->printname();
$obj->printrole();
