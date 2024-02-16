<?php
// error_reporting(0);
include_once("trait.php");
include_once("connection.php");
//$type = $_GET['ty'];
    
if( isset($_POST['submit']))
{
class disp
{  
    use creation; 
    
}

    $adder = $_POST["adder"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $ph = $_POST["ph"];
            
$obj = new disp();
$obj->insert_teacher($name,$email,$ph,$adder);
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
        
       

        <br /><br />Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="name">

        <br /><br />email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="email" name="email">

        <br /><br />phone no.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="ph"><br /><br />
         
        Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="adder">
        <input type="submit" name="submit">
    </form>
    <!-- <a href="edit.php?">edit</a> -->

</body>

</html>


