<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
</style>
</head>
<body>
    
</body>
</html>


<?php
include('connecti_.php');


echo $_GET['op'];

if($_GET['op']=="inner")
{ 
    $se='SELECT * FROM student INNER JOIN user ';
    

}

else if($_GET['op']=="left")
{    
    

    $se='SELECT * 
    FROM Student
    LEFT JOIN user 
    ON Student.id = user.user_id; ';
}

else if($_GET['op']=="right")
{     
    

    $se='SELECT * 
    FROM Student
    RIGHT JOIN user 
    ON Student.id = user.user_id; ';
}
// $checkdatainusersdet = $userinfofetch->num_rows;    
$res=mysqli_query($conn,$se);
echo "<pre>";
echo '<table>';
echo "<tr>";

echo "<th>" .  'STUDENT ID'. "</th>";
echo "<th>" .  'NAME'. "</th>";
echo "<th>" .  'CITY'. "</th>";
echo "<th>" .  'ID'. "</th>";
echo "<th>" .  'ADDRESS'. "</th>";

echo "<th>" .  'PHONE NUMBER'. "</th>";
echo "</tr>";



while ($resultdata=mysqli_fetch_assoc($res)) 
{
    echo "<tr>";
    echo "<td>" . $resultdata['id'] . "</td>";
    echo "<td>" . $resultdata['name'] . "</td>";
    echo "<td>" . $resultdata['city'] . "</td>";
    // echo "<td>" . $resultdata['id'] . "</td>";
    echo "<td>" . $resultdata['user_id'] . "</td>";
    echo "<td>" . $resultdata['add'] . "</td>";
    echo "<td>" . $resultdata['ph_no'] . "</td>";
                    
                    
    echo "</tr>";
}
echo '</table>';

echo "<pre>";











