<?php
 function swap (&$x,&$y)
 { $temp=$x;
    $x=$y;
    $y=$temp;
    }

    $x=10;
    $y=20;
    echo "<br> before swapping:<br>x:$x<br> y:$y";

    swap($x,$y);
    echo "<br> affter swapping:<br>x:$x<br> y:$y";
?>