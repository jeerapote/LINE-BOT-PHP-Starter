<?php
$access_token = 'NYd8+951SKv8ah9nHcP5HsZ8wltb7H2yyUIL2Cgk+oP5YNI2NIguihcaxAyzfD7Q8JxRR2oBfhTfAW8dJsqxPw90/fBriowKHECtdgsHXP9NsPFN3CX7+H/VU2uRQD65rXiUd4idLNCDAJ+hgAlnLQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
