<!--  -->
<?php
function calculatefactorial($n)
{
   if ($n<=1)
   return 1;
   else 
   return $n *calculatefactorial($n-1);
}
echo"factorial of no. is :" .calculatefactorial(5)."<br>";
echo"factorial of no. is :" .calculatefactorial(10);