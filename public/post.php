<?php
$ch = curl_init(); 
$message = array("text" => "This is a line of text.\nAnd this is another one.");

curl_setopt($ch, CURLOPT_URL, 'https://hooks.slack.com/services/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'); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message)); 

curl_exec($ch); 
?>