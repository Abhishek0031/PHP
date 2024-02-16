<html>
    <body>
    <?php

session_start();
$_SESSION["name"]="Abhishek";
$_SESSION["cst"]="kumar";
$_SESSION["cst2"]="gupta";
// echo "session is start";
ECHO "<br>";
print_r($_SESSION);
ECHO "<br>";
?>

        <a href="session_link.php">go to next page</a>
    </body>
</html>


