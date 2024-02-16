<?php
$url = "https://dummy.restapiexample.com/api/v1/employees";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_HEADER, false);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

 

$contents = curl_exec($ch);

curl_close($ch);
print_r(json_decode($contents));

?>