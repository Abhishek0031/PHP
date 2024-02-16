<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "abhishek";

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// Connection successful
echo "Connected successfully<br>";







// $ct = "CREATE TABLE IF NOT EXISTS userdata (

//     ID integer(10) AUTO_INCREMENT primary key,

//     name varchar(20),

//     address varchar(20),

//     status enum('active','inactive','busy','suspend') default 'active'

//     )";

// mysqli_query($conn,$ct);
if(isset($_POST["insert"]))
{
    $name = $_POST["name"];
    $address = $_POST["address"];
    $status = $_POST["status"];
    if(!empty($status)||$status!='active'||$status!='inactive'||$status!='busy'||$status!='suspend')
     { 
        $ins = "insert into userdata(name,address,status) values ('$name','$address','$status')";
        mysqli_query($conn,$ins); 
     }

     else
     {
        $ins = "insert into userdata(name,address) values ('$name','$address')";
         mysqli_query($conn,$ins);
     }
 }


?>



<html>

<body>

    <form method="post">

        Enter name :

        <input type = "text" name= "name"><br><br>

        Enter address :

        <input type = "text" name= "address"><br><br>

        Enter status :

        <input type = "text" name = "status"><br><br>

        <input type = "submit" name= "insert" value="insert"><br>

       

</form>

</body>

</html>



   

    













