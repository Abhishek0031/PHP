<?php
//string is never type cast in integer or any other data type
switch('1')
{
    case '1':
        echo "xyz";
        break;
     case 1:
         echo "abc";
         break;
    case 3:
        echo "xyz";
        break;
        }
        echo "<br>";
if(1 and 1 )
{
    echo"abc";
}
elseif (10 and 20)
{
    echo "pqr";
}
else
echo "xyz";
