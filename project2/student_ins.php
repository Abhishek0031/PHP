<?php
// error_reporting(0);
include_once("trait.php");
include_once("connection.php");
$type = $_GET['ty'];
echo "$type";
if( isset($_POST['submit']))
{
class disp
{  
    use creation; 
    
}

    $rno = $_POST["rlm"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $ph = $_POST["ph"];
            
$obj = new disp();
$obj->insertdata($rno,$name,$email,$ph);
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
        
        Roll no.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="rlm">

        <br /><br />Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" name="name">

        <br /><br />email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="email" name="email">

        <br /><br />phone no.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="ph"><br /><br />

        <input type="submit" name="submit">
    </form>
    <!-- <a href="edit.php?">edit</a> -->

</body>

</html>


