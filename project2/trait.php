<?php
// error_reporting(0);
//include_once('trait.php');
include("connection.php");

trait creation
{
    

    public function insertdata($rno,$name,$email,$ph)
    {
        global $conn;
        // if($type=="student")
        // {
            $inr="INSERT INTO student (rno ,namee,email,phno ) VALUES ('$rno','$name','$email','$ph');";
            $res=mysqli_query($conn,$inr);
            
        // }
    
    }

    function upd_student( $id, $rno,$name,$email,$ph)
    {
        global $conn;
        // if($type=="student")
        // {
         $sel = "SELECT * from student WHERE id = '$id'";
         $result = mysqli_query($conn,$sel);
         mysqli_fetch_assoc($result);
         print_r($result);
        $que="UPDATE student SET rno='$rno',namee='$name',email='$email',phno='$ph' WHERE id='$id'";
        $res=mysqli_query($conn,$que);
        if($res)
        {
            echo "data updated";
        }
        else
        {
            echo "data not to be updated";      
        }
        // }
    }


    //teacher functions
    function insert_teacher($namee,$phone,$email,$address)
   { 
        global $conn;
        
        
        $qur= "INSERT INTO teacher (namee,email,phno,Address) VALUES ('$namee','$email','$phone','$address')";
        mysqli_query($conn,$qur);
    }
    
    function upd_teacher($id,$name,$email,$ph,$adder)
    {
        global $conn;
        $sel = "SELECT * from teacher WHERE id = '$id'";
        $result = mysqli_query($conn,$sel);
        mysqli_fetch_assoc($result);
        $que="UPDATE teacher SET namee='$name',email='$email',phno='$ph',address='$adder' WHERE id=$id";
        mysqli_query($conn,$que);

    }

   
    
    function delete_data($id,$type)
    {
        global $conn;

        $que="DELETE FROM $type WHERE id='$id'";
        $req=mysqli_query($conn,$que);

        // if($req!=0)
        // {
        //     echo "data deleted";
        // }
        // else
        // {
        //     echo "data not deleted";

        // }
    }
    
    
}
        

        


        
            
            
            
        

?>





