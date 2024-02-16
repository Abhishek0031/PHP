
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="SUBMIT">
</form>
    
</body>

</html>


<?php
echo "<pre>";
// print_r($_FILES);

echo $_FILE['file']['type'];

echo $A['name'];
echo "</pre>";
 
?>