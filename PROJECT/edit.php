<?php

 include_once('connection.php');   
 $email = $_GET['em'];
 $sel = "Select * from detail where email = '$email'";
 $result = mysqli_query($conn,$sel);
 $data = mysqli_fetch_assoc($result);    /*To fetch the data from the data base and the  retrive the data from database 
                                             is in the form of array (here data is work ass array)
                                         */

    print_r($data);

 if(isset($_POST['submit']))
 {
 $name=$_POST['name'];
 $age=$_POST['age'];
 


$upt="UPDATE detail set namee='$name', age='$age' where email='$email' ";
mysqli_query($conn,$upt);
 }



?>

<html>
    <head>
        <title>
            update data
        </title>
    </head>
    <body>
         
        <form action="#" method="post">
            Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" name="email" '>
            <br/><br/>Password:
            
            <input type="text" name="name" '>
            <br/><br/>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" name="age" ?><br/><br/>
            <input type="submit" name="submit">
        </form>   
        <!-- <a href="edit.php?">edit</a> -->
        
</body>
</html>