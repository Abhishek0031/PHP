<?php
include("conn.php");
error_reporting(0);
    try{
        if(!isset($_POST["id"]))
        {
            throw new Exception("some error occure to update data");
        }
        
        $id=$_POST["id"];   
        $name = $_POST["name"];
        $email = $_POST["email"];
        $country = $_POST["country"];
        $state = $_POST["state"];
        $city = $_POST["city"];
        $se="SELECT `id` FROM address_tb";
        $row=mysqli_query($conn,$se);
        $check=1;  
        while($data=mysqli_fetch_assoc($row))  
        {   
            // echo $data["id"];
            // echo $id;
            if($id==$data["id"])
            {
                $check=0;
                break;   
            }
        }
        // echo $check;dd
        $ins_data = "UPDATE data_tb SET `name`='$name',`email`='$email' WHERE    id=$id";
        $ins_adder = "UPDATE address_tb SET `country`='$country',`states`='$state',`city`='$city' WHERE    id=$id";
        $insert_adder="INSERT INTO `address_tb`(`id`, `country`, `states`, `city`) 
                      VALUES ('$id','$country','$states','$city')";
        if($check==0)
        { 
            mysqli_query($conn, $ins_data);
            mysqli_query($conn, $ins_adder);  
        }
        else{
            mysqli_query($conn, $ins_data);
            mysqli_query($conn, $insert_adder);
        }
      
        // echo "<br>";
        // echo $_POST["name"];
        

        
        mysqli_query($conn, $ins_data);
        mysqli_query($conn, $ins_adder);        

        $response = array('status' => 'success', 'data' => "data updated");
    } 
    catch(Exception $e){
        $response = array('status' => 'fail', 'data' => $e->getMessage());
    }
    
    
    print_r(json_encode($response)); 
  
?>