<?php
include("conn.php");
try{
if(!$conn)
{
   throw new Exception("connection error occur-");
}
$que="SELECT data_tb.id,data_tb.name,data_tb.email, address_tb.country, address_tb.states,address_tb.city
FROM data_tb LEFT JOIN address_tb ON data_tb.id=address_tb.id";
$row=mysqli_query($conn,$que);
$arr=[];
while($data=mysqli_fetch_assoc($row))
{
  $arr[]=$data; 
  // json_encode(print_r($data)); 
}

}
catch (Exception $e)
{
 $arr=["status"=>"fail","Error"=>$e->getMessage()];
}



print_r(json_encode($arr));

?>
