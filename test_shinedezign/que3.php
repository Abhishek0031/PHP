<!-- we can createa session using (session_start();)to store the values at the server side and as per user request  of that value we are 
use the $_SESSION (super global ) variable to retrive the data from the server
  
--we can cheack the sesion is created or not SIMPLY WE ARE go to the xampp folder and click the tmp(temprery file)
at that location we have our created session;

--to distroy the session we can write    [session_destroy();]

-->
<?php
session_start();
$_SESSION["NAME"]="ABHISHEK";
$_SESSION["INTERN"]="PHP";


echo $_SESSION["NAME"]."<br>";
echo $_SESSION["INTERN"];



echo "<pre>";
print_r( $_SESSION);
echo "<pre>";

// session_destroy();



?>