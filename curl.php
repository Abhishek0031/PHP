<?php

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://www.canhazip.com');

$result = curl_exec($ch);
echo $result;
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);


?>