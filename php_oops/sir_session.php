<?php
session_start();
if (isset($_POST['save'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    setcookie('Email', "$email", time() + 1 * 1 * 60 * 60, "/");
    setcookie('Password', "$password", time() + 1 * 1 * 60 * 60, "/");
    if (isset($_COOKIE['Email']) && isset($_COOKIE['Password'])) {
        $_SESSION['Email'] = $email;
        header("Location: session_dashborad.php");
    } else {
        echo ("<br>");
        echo "No Cookie There.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for=""> Email: </label><input type="email" name="email" required><br><br>
        <label for=""> Password : </label><input type="password" name="password" required><br><br>
        <button type="submit" name="save">Submit</button>
    </form>
</body>

</html>