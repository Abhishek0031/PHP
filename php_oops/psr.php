<?php

namespace UserDetails;

/* User class  with details Name,Age*/

class User 
{
    private $name;
    private $age;
    public function __construct()
    {
        $this->name='abhishek';
        $this->age=21;
        
    }
    public function displayUser()
    {
        echo $this->name;
        echo $this->age;
        echo '<br/>';
    }
}   



