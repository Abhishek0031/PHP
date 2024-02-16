<?php

// $a=$_POST['f1'];
// $b=$_POST['f2'];

$z=$_GET['ty'];

// if(isset($POST['submit']))
// { 
    if($z=='add')
    {$a=$_POST['f1'];
        $b=$_POST['f2'];
        $c=$a+$b;
        echo "your addition output is=".$c;
    }   
    if($z=='fact')
    {$a=$_POST['f1'];
        $c=1;
        for($i=$a;$i>0;$i--)
           {
            $c=$c*$i;
           }
        echo "your addition output is=".$c;
    }   
    if($z=='PATT')
    {$a=$_POST['f1'];
        for ($i=0; $i<$a; $i++)
        {
            for ($j=0; $j<=$i; $j++)
        {
            echo "* ";
        }
        echo "<br/>";
        }
           
        
        echo "<br>"."<br>";
        
    }   
//  }   
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br/>
<a href="form_formation.php">go to form</a>
</body>
</html>
