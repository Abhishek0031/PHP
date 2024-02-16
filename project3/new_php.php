<?php
$a=$_POST['f11'];
$b=$_POST['f22'];

$d=$_POST['f44'];
if(isset($_POST['submit']))
{
    if($a!="" && $b!="")
    {
        $x=$a+$b;
        echo "your addition output is=".$x;
    }   
    
    if($_POST['f33']!="")
    {echo "<br/>";
        $c=$_POST['f33'];
        
        for ($i=0; $i<$c; $i++)
        {  echo "<br/>";
            for ($j=0; $j<=$i; $j++)
        {
            echo "* ";
        }
        
          }
    }
    if($_POST['f44']!="")
    {echo "<br/>";
             $fact=1;
        
        for($i=$_POST['f44']; $i>0 ;$i--)
           {
            $fact*=$i;
            
           }
        echo "FACTORIAL OF NO. IS=".$fact;
    }  
}
?>