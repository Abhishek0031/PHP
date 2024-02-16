<?php
include("conn.php");
print_r($_POST);
if (isset($_POST["name"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $ins = "INSERT INTO data_tb(name, email) VALUES ('$name','$email')";
  mysqli_query($conn, $ins);
}
//for show data
$que = "SELECT * FROM data_tb";
$data = mysqli_query($conn, $que);
echo "<table border='2px solid black'>";

while ($new = mysqli_fetch_assoc($data)) {
    static $count = 0;
    
    if ($count == 0) {
        echo "<tr>";
        foreach ($new as $key => $val) {
            echo "<td>" . $key . "</td>";
            $count=1;
        }
        echo "<td colspan=2>click events</td>";
        echo "</tr>";
    }
   

    echo "<tr>";
        echo "<td class='id'> $new[id] </td>";  
        echo "<td class='name'> $new[name] </td>";
        echo "<td class='email'> $new[email] </td>";
        echo "<td class='delete'> <button id='del$new[id]' class='delet'>DELETE</button>  </td>";
        echo "<td class='update'> <button id='upd$new[id]'>UPDATE</button> </td>";
    
    echo "</tr>";   
}
// echo "</tr>";
echo "</table>";
// if(isset())

//for delete querry
echo $_POST["d_id"];  
if(isset($_POST["d_id"]))
{ $id=$_POST["d_id"];
  
  $que="DELETE FROM `data_tb` WHERE id='$id'";
  mysqli_query($conn,$que);

}
?>
