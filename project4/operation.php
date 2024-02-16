<?php
// include("insert.php");
include('connecti_join.php');

$userinfoquery = "SELECT * FROM student";
$userinfoqueryfetch = $conn->query($userinfoquery);
$checkdatainusers = $userinfoqueryfetch->num_rows;

$userinfo = "SELECT * FROM user";
$userinfofetch = mysqli_query($conn,$userinfo);
$checkdatainusersdet = $userinfofetch->num_rows;    
// $resultdata = $userinfoqueryfetch->fetch_assoc();
// print_r($resultdata);



?>


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
    <div>
        <table>


            <tr>
                <th>STUDENT_ID</th>
                <th>NAME</th>
                <th>CITY</th>
            </tr>

            <?php

            if ($checkdatainusers > 0) {

                while ($resultdata = $userinfoqueryfetch->fetch_assoc()) {
                    
                    echo "<tr>";
                    echo "<td>" . $resultdata['id'] . "</td>";
                    echo "<td>" . $resultdata['name'] . "</td>";
                    echo "<td>" . $resultdata['city'] . "</td>";
                    echo "</tr>";





                    // print_r($resultdata);

                }

            }

            ?>

        </table>

    </div>

    <br><br>

    <div>

        <table>

            <tr>

                <th>ID</th>
                <th>USER_ID</th>
                <th>ADDRESS</th>
                <th>PHONE_NO</th>
            </tr>

<?php

            if ($checkdatainusersdet > 0) {

                while ($ressultdata = $userinfofetch->fetch_assoc()) 
                {

                    echo "<tr>";
                        echo "<td>" . $ressultdata['id'] . "</td>";
                        echo "<td>" . $ressultdata['user_id'] . "</td>";
                        echo "<td>" . $ressultdata['add'] . "</td>";
                        echo "<td>" . $ressultdata['ph_no'] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
</table>
</div>
<a href="join.php?op=<?php echo "inner";?>" class="myButton">INNER JOIN</a>
<a href="join.php?op=<?php echo "left";?>" class="myButton">LEFT JOIN</a>
<a href="join.php?op=<?php echo "right";?>" class="myButton">RIGHT JOIN</a>


</body>
</html>










                




        

        
        
        
        
    

        

