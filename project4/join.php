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
include('connecti_join.php');


echo $_GET['op'];

if($_GET['op']=="inner")
{ 
    $se='SELECT * FROM student INNER JOIN user ON Student.id = user.user_id; ';
    

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

echo '<table>';
echo "<tr>";

echo "<th>" .  'STUDENT ID'. "</th>";
echo "<th>" .  'NAME'. "</th>";
echo "<th>" .  'CITY'. "</th>";
echo "<th>" .  'ID'. "</th>";
echo "<th>" .  'USER ID'. "</th>";
echo "<th>" .  'ADDRESS'. "</th>";
echo "<th>" .  'PHONE NUMBER'. "</th>";
echo "</tr>";



while ($resultdata=mysqli_fetch_assoc($res)) 
{
    echo "<tr>";
    echo "<td>" . $resultdata['id']. "</td>";
    echo "<td>" . $resultdata['name'] . "</td>";
    echo "<td>" . $resultdata['city'] . "</td>";
    // echo "<td>" . $resultdata['id'] . "</td>";
    echo "<td>" . $resultdata['user_id'] . "</td>";
    echo "<td>" . $resultdata['add'] . "</td>";
    echo "<td>" . $resultdata['ph_no'] . "</td>";
    echo "</tr>";   
}
echo '</table>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .myButton {
    margin-top: 25px;
    display: inline-block;
margin-left: 20px;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
-ms-border-radius: 5px;
-o-border-radius: 5px;
background-color: deeppink;
color: #fff;
padding: 5px;
/* position:absolute; */
}

.myButton:hover {
cursor: pointer;
    background-color: #faebd7;
color: #000;

}
</style>
</head>
<body>
    <a href="operation.php" class="myButton"> go to operation </a>
</body>
</html>













