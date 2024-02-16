<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Form for country</h3>
    <form action="#">
    
    name:
    <input type="text" name="name">
    <br/>
    <label  for="name"> enter:</label>
    <input type="text" name="enter">
    <input type="submit" name="submit">
</form action="#">
<?php
echo $_POST["enter"];
// static $x="yes";
$x=$_POST["enter"];
if($x=="yes")
{
?>
<h3> Form for state </h3>
<form>

  <label  for="name">STATE NAME:</label>
    <input type="text" name="name">
   
    
</form>
<?php
}
?>
</body>
</html>



