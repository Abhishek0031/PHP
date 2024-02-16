<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .wspan
     {
        width: 50px;
        height: 50px;
        background-color: black;
        display: inline-block;
        

     }

     .rspan
     {
        width: 50px;
        height: 50px;
        background-color: white;
        display: inline-block;
    
     }
    </style>
</head>
<body >
    <div style="border:2px solid black; display: inline-block">
<?php
for($i=0;$i<8;++$i)
{  
    
    for($j=0;$j<8;++$j)
    { 
        if(($i+$j)%2==0)
        {
            ?>
        
       <div class='wspan'></div>
       <?php
       }
       else 
       {
        ?>
        
        <div class='rspan'></div>
        <?php
       }   
    }  
    echo "<br>";
}
?>
    </div>
</body>
</html>







