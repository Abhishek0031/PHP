<?php
include("conn.php");
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script >
    jQuery(document).ready(function(){
        jQuery("#bac").click(function()
        {
           jQuery("body").load("main_page.html");
        });

        jQuery(".delet").click(function(){
         var data={d_id:jQuery(this).attr("id").slice(3)  }
        //  console.log(st);
         $.post("delete.php",data,function(response){
            // console.log(data);  
            // document.getElementById("div1").innerHTML = response;    
       
        });
            
            
        });
    });
    </script>
</head>
<body>
 <button id="bac"> GO BACK </button>
<div id="div1"></div>
</body>
</html>





