<?php

$url = "http://localhost/php/Api/fetchGET.php";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_exec($ch);
curl_close($ch);
?>