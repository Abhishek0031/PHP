<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" 
  integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw=="
   crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>

</head>
<script>
  $(document).ready(function() {
    $("#sub").click(function(e) {
      e.preventDefault();
        var name_get = jQuery("#name").val();
        var email_get = jQuery("#id").val();
        var isValid = true;
        var namepattern = /^[a-zA-Z_]+$/;
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

        if (name_get === "") {
          jQuery("#spname").text("  name is Required");
          isValid = false;
        } else if (!namepattern.test(name_get)) {
          jQuery("#spname").text("  please enter valid name");
          isValid = false;

        } else {
          jQuery("#spname").text("");
          
        }


        if (email_get === "") {
          jQuery("#spemail").text("  email is Required");
          isValid = false;
        } else if (!emailPattern.test(email_get)) {
          jQuery("#spemail").text("  please enter valid email");
          isValid = false;

        } else {
          jQuery("#spemail").text("");
        }
          
       
      var data = $("#fm").serializeArray();
      if (isValid) {
          jQuery("form")[0].submit();
        
      
      $.post("form_ins.php", data, function(data) {
        console.log(data);
        
        if(data=="")  
        { 
        $("body").load("main_page.html");
      }
    
      });
    }
    
    });
  });
</script>


<body>
    <form id="fm" action="#" method="post">
      NAME:
      <input type="text" name="name" id="name" /><span
        id="spname"
        style="color: red"
      ></span
      ><br />
      EMAIL:
      <input type="email" name="email" id="id" /><span
        id="spemail"
        style="color: red"
      ></span
      ><br />
      <input type="submit" name="sub" id="sub" /><br />
    </form>
    <!-- <button id="sub">submit</button> -->
  </body>
</html>

<?php
// include("conn.php");
// if (isset($_POST["sub"])) {
//   $name = $_POST["name"];
//   $email = $_POST["email"];
//   $ins = "INSERT INTO data_tb(name, email) VALUES ('$name','$email')";
//   mysqli_query($conn, $ins);
// }


?>