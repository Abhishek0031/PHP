<?php
session_start();
if(isset($_SESSION['Email'])) 
{
    echo($_SESSION['Email']);
} 
else 
{
    header("location: session_form.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <body>
    <form action="sir_session.php" method="get">
    <a href="logout_session.php" >
        <button type="submit" id="logout">Logout</button> </a>
        </form> 
    </body>

    
</html>