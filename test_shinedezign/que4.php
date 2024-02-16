<!-- when the try block is execute and an exception is find then throw is use to thro the exception towards the catch
  where we can handel the exeption 

final is alwayas execute is the exeption is occur or note
-->
<?php
function divideNumbers($numerator,$denominator)
{
    try
    {
    
        if(($denominator==0||$numerator==0)&&$denominator==0)
        throw new Exception("DivisionByZeroError");
        else
        echo $numerator/$denominator."<br>";
    }
    catch (Exception $e)
    {
    $e->getMessage();
      echo "DivisionByZeroError"."<br>";
    }

    finally
    {
        echo "end of division attemt"."<br>";

    }
   
}



 divideNumbers(10,2);
 echo  "<br>";
 divideNumbers(0,0);
 echo  "<br>";
 divideNumbers(0,9);
 echo  "<br>";
 divideNumbers(9,0);

 echo  "<br>";
 divideNumbers(100,200);



