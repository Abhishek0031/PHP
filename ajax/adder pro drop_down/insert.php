<?php
include("conn.php");

// SELEST DATA FOR CHECK  EMAIL EXISTANCE 
$que = "SELECT * FROM data_tb";
$data = mysqli_query($conn, $que);
$pos=1;    
while ($new = mysqli_fetch_assoc($data)) {
   if($_POST["email"]==$new["email"]){
       $pos=0;
       break;

   }
  }
  //FOR INSERT DATA IN DATA BASE


  if (isset($_POST["name"])) {    //CHECK NAME IS ENTERED OR NOT
    try{
      if($pos==0){
       throw new Exception("email already exist data_tb");
      }
      $name = $_POST["name"];
    $email = $_POST["email"];
    //INSERT DATA IN DATA TABLE (data_tb)
    $ins = "INSERT INTO data_tb(name, email) VALUES ('$name','$email')";
    mysqli_query($conn, $ins);

    if (isset($_POST["country"])) {
      //FOR CHECKING EMAIL IS ENTERED OR NOT
        $check=1;
        $se_check="SELECT `email` FROM `data_tb`";
        $row1 = mysqli_query($conn, $se_check);
        $count=mysqli_num_rows($row1);
        while($data1 = mysqli_fetch_assoc($row1) )
        {  if($count>1){
            if($email==$data1["email"])
            {   
                $check=0;
                break;
            }
             
        } 
        $count--; 
        

        }
        //INSERT DATA IN (adder_tb)TABLE
        try{
          if($_POST["country"]==""&&$_POST["state"]==""&&$_POST["city"]=="") //CHECK CONDISION FOR COUNTRY,CITY OR STATE IS ENTERED OR NOT
         {
         throw new Exception("country is not entered");
        }
         $se = "SELECT `id` FROM `data_tb` WHERE email='$email'";
        $row = mysqli_query($conn, $se);    
        $data = mysqli_fetch_assoc($row);
       
        $id = $data["id"];
            
        $country = $_POST["country"];
        $states = $_POST["state"];
        $city = $_POST["city"];
        //INSERT DATA IN DATA TABLE((adder_tb))
        $ins2 = "INSERT INTO `address_tb`(`id`, `country`, `states`, `city`) 
                 VALUES ('$id','$country','$states','$city')";
        mysqli_query($conn, $ins2);
        }
        catch (Exception $e)
        {
          $ar=array('status'=>"fail",'data'=>$e->getMessage());
          print_r($ar);

        }
        
    }
    
    }
    catch(Exception $e){
      $ar=array('status'=>"fail",'data'=>$e->getMessage());
      print_r($ar);
    }
    
    
}

