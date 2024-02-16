<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    <br/> 
    country name:
    <input type="text" name="country_name">
    <br/><br/>
     state NAME:
    <input type="text" name="state_name" >
    <br/>
</br/>
<input type="submit" name="submit">

 </form>
</body>
</html>

<?php
    error_reporting(0);
include("connection.php");
$country_name=$_POST['country_name'];
$state_name=$_POST['state_name'];

$que="SELECT country.country_name, states.states_name,  city.city_name
FROM country
INNER JOIN states  ON country.id_cou=states.id_st 
INNER JOIN city ON states.id_pri=city.id_city 
where   states.states_name='$state_name' AND country.country_name='$country_name' ;";

$data=mysqli_query($conn,$que);

echo "<br/><br/>";
if (isset($_POST['submit']))
{

echo '<table border="2px solid black">';
echo "<tr>";

echo "<th>" .  'COUNTRY'. "</th>";
echo "<th>" .  'STATE'. "</th>";
echo "<th>" .  'CITY'. "</th>";

echo "</tr>";
echo "<tr>";
    
    echo "<td>" .$country_name. "</td>";
    echo "<td>" .$state_name. "</td>";


    echo "<td>";

while($row1=mysqli_fetch_assoc($data))
{
    echo  $row1['city_name'].",";

}
echo "</td>";
echo "</table>";
}

// echo '<table border="2px solid black">';
// echo "<tr>";

// echo "<th>" .  'COUNTRY'. "</th>";
// echo "<th>" .  'STATE'. "</th>";
// echo "<th>" .  'CITY'. "</th>";

// echo "</tr>";
// while($row=mysqli_fetch_assoc($data))
// {   
//     echo "<tr>";
//     if($count<=1)
   
//    {
//      echo "<td>" . $row['country_name']. "</td>";

//    }
//     echo "<td>" . $row['states_name'] . "</td>";
//     echo "<td>" . $row['city_name'] . "</td>";
//     echo "</tr>"; 

//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";


// }
// echo '</table>';



// echo '<table border="2px solid black">';
// $count=0;
// while($row1=mysqli_fetch_assoc($data))
// {
//     if($count ==0)
//     {
//         echo "<tr>";
//             foreach( $row1 as $key=>$value)
//         {
//             echo "<th> $key </th>";
//         }  
//         echo "</tr>";
//         $count++;
//     }
//     echo "<tr>";
//     foreach( $row1 as $value)
//     {
//         echo "<td> $value </td>";
//     }      
// echo "</tr>";
// }
// echo '</table>';




// $data2=mysqli_query($conn,$que);
// $data3=mysqli_query($conn,$que);

// echo '<table>';


// while($row=mysqli_fetch_assoc($data))   
// {  
//     // $var= $row['country_name'];
//     echo "<tr>";

//     echo "<td>" . $row['country_name']. "</td>";
//     echo "<td>" . " " . "</td>";

//     echo "<td>" . " " . "</td>";
//     echo "</tr>";


//     while($iner=mysqli_fetch_assoc($data2))
//     { $count=1;
        

//         if($count<=2)
//         {
//         echo "<tr>";

//         echo "<td>" . " " . "</td>";
//         echo "<td>" . $iner['states_name'] . "</td>";
//         echo "<td>" . " " . "</td>"; 
//         echo "</tr>";
        
//         }
//         $count++;
        
//         while($ine=mysqli_fetch_assoc($data3))
//         { $coun=1;
            
//             // echo "<tr>";

//             if($coun<=4)
//             {
//             echo "<tr>";
//             echo "<td>" . " " . "</td>";
//             echo "<td>" . " " . "</td>";
  
//             echo "<td>" . $ine['city_name'] . "</td>";
//             echo "</tr>";

//             }
//             $coun++;
            
//         }

//     }
        
    
    
//     // echo "<td>" . $row['city_name'] . "</td>";
//     // echo "</tr>"; 

//     // echo "<pre>";
//     // print_r($row);
//     // echo "</pre>";


// }
// echo '</table>';



?>
        
