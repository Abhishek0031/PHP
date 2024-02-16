
<?php

session_start();
// session_start();

$_SESSION['firstname'] = 5;

$_SESSION['LastName'] = "Gupta";

echo"<pre>";
print_r( $_SESSION);
echo"<pre>";
echo"<pre>";
var_dump( $_SESSION);
echo"<pre>";


// session_destroy();
?>

<!-- </html> -->
