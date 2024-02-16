<?php
$sessionLifetime=120;
ini_set('session.gc_maxlifetime', $sessionLifetime);
session_start();
$_SESSION['student']="abhishek";
$_SESSION['student_tel']="284605";
// if($_GET['pass']==)
// {
    
echo $_SESSION['student'];
echo"<br>";
echo $_SESSION['student_tel'];
echo"<br>";
// }
print_r ($_SESSION);
echo"<br>";

// else{
//     echo "password mismatch";
// }
session_destroy();
?>