<!-- In simple class inheritance when we create a final method then we cann't override in derive class
it print an error(CANN'T OVERRIDE THE FINAL BASE METHOD OF THE CLASS )

INSTED WHEN WE CREATE THE TRAIT BASE WITH A FINAL METHOD THEN WE CAN OVERRIDE THE METHOD 
BECAUSE IN TRIAT WE ARE USING THE PROPERTIES OF BUT IN SIMPLE CLASS WE ARE INHERIT THE PROPERTY FROM BASE CLASS 


IN OVERRIDING WE CAN SAY THAT WE GIVEING THE RE DEFINATION TO THE METHOD OF CLASS , IF WE CREATE THE OBJECT OF DERIVE CLASS 
THEN THE FIRST PREFRENCE OF OVERIDING IS TO CALL THE DERIVE CLASS METHOD IF FUNCTION IS NOT FOUND IN DERIVE CLASS THEN 
THE BASE CLASS METHOD IS CALL


 HERE THE OUTPUT IS:
 derive class
 derive with final class
-->
<?php
trait base 
{ public  function disp()
    {
        echo "base class<br>";
    }

    public final function final_disp()
    {
        echo "base with final class<br>";
    }

   
}

class deriv

    { use base;
    public  function disp()
    {
        echo "derive class<br>  ";
    }
   
    public  function final_disp()
    {
        echo "derive with final class<br>";
    }
}


$obj=new deriv;
$obj->disp();
$obj->final_disp();
