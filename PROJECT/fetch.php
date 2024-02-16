<?php

echo $total;
//echo $result['namee'];
// var_dump ($result);
// var_dump ($result);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center> <table border=4px>
        <th> name </th>
        <th> email </th>
        <th> age </th>
        <th>edit</th>
     <!-- <center> -->
    <?php
    
    while($total!=0)
{
    $result=mysqli_fetch_assoc($dat);
   
    echo"<tr>
       <td>  $result[namee] </td>
       <td>  $result[email] </td>
       <td>  $result[age]   </td>
       <td><a href = 'edit.php?em=$result[email]' > edit </a> <td/>  
       <tr/>";
    $total--;
     
    }
    
    echo"</table></center>"; 
    ?>
</body>
</html> 