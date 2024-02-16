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
    $rno = $_POST["rlm"];
    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $ph = $_POST["ph"]; 

class disp
{  
    use creation; 
    
}

    $obj = new disp();
    $obj->upd_student($id,$rno,$name,$email,$ph); 
 }
?>

<html>

<head>
    <title>
        update
    </title>
</head>

<body>

    <form action="#" method="post">
        enter id for update data:   
        <br/><input type="number" name="idd">
        <br /><br />
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


