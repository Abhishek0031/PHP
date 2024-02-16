<?php
class create {
    public $conn;
     public function __construct()
    {   global $conn;
        $USERNAME="root";
        $HOSTNAME="localhost";
        $PASSWORD="";
        $DATABASE="test";
        $conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
        // $connn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,"sha");
        // var_dump($connn);
        // echo "<hr/>";
        // var_dump($conn);

        if($conn)
        {
        echo "conection is OK";
        }
         else    
        {
          echo "fail to connect to server";
        } 




    }

public function __destruct()
{ global $conn;
    var_dump($conn);
      mysqli_close($conn);
        
if(!$conn)
{
echo "<BR>conection is destroy";
}
 else    
{
echo "fail to destroy";
} 
echo "<hr/>";
var_dump($conn);
}

      
}


$obj= new create();
// global $conn;
// var_dump($conn);
// $x=mysqli_close($conn);
        
// if($x)
// {
// echo "conection is OK";
// }
//  else    
// {
// echo "fail to connect to server";
// } 

?>