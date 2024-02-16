<?php
class hello 
{
    public static function disp()
    {
         echo '<br>parent';

    }

}

class derive extends hello 
{
    public static function disp()
    {
         echo '<br>derive';
         
    }

    function prin()
    {
        self::disp();
        static::disp();
        parent::disp();

    }

}
$obj= new derive;
$obj->prin();
?>