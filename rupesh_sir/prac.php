<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        name:
        <input type="text" name="name" id="name">
        <br />
        email:
        <input type="email" name="email" id="email">
        <br />
        <input type="submit" name="submit" id="submit">
    </form>

</body>

</html>



<?php
if(isset($_POST["submit"])){
print_r($_POST);
$username = $_POST['name'];
$email = $_POST['email'];
$errors = "";
// Validate username
if (empty($username)) {
    $errors = 'Username is required';
} elseif (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
    $errors = 'Username contains invalid characters';
}
// Validate email
if (empty($email)) {
    $errors = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors = 'Invalid email format';
}

print_r($errors);
}
?>