<?php

 //sinclude_once('connection.php'); 
 include_once('trait.php'); 
error_reporting(0);

 $id = $_POST['idd'];
 //$type= $_GET['ty'];
 echo "$id";
 //echo "$type";

 if(isset($_POST['submit']))
 {
    $adder = $_POST["adder"];
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $ph = $_POST["ph"]; 

class disp
{  
    use creation; 
    
}

    $obj = new disp();
    $obj->upd_teacher($id,$name,$email,$ph,$adder); 
 }
?>

<html>

<head>
    <title>
        insert
    </title>
</head>

<body>

    <form action="#" method="post">
    &nbsp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; enter id for update data:   
    <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="idd">
        
       

        <br/><br />Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="name">

        <br />email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="email" name="email">

        <br />phone no.:&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="ph"><br />

      Address:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="adder">

        <input type="submit" name="submit">
    </form>
    <!-- <a href="edit.php?">edit</a> -->

</body>

</html>


