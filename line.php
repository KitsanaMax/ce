<?php
$access_token = 'Xi4kz+JTYVZkC54oXWeKm9cwNSBcoJHUYoNeBzga3vRdVsLQl72p+km5YLzN+nsDPmnBVjmySJITW2VuTAt7gb02B+vzmZS6g0mp9IijrEObweAcOxEkpKU/pxpFXfrStBGf6hoZCQgPfqjxTv+/iAdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
