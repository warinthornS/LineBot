<?php
$access_token = 'qQAIscwhCNxVm/aKR+GC2fHKmuu2FLP9+F9R2iuqtZaCMKPaSNZVGca6ihSiytD8QvXTUnJDn7xk29xaesmos0x8XqAwIEgXHHPivMcTi0++nhLaIPgyaeknXRVi/wY52rQ1rTHGZDxYIi/uNBkCxAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;