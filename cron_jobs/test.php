<?php
$to = "youremail@address.com";
$from = "auto_responder@filler.com";
$subject = 'Testing Cron';
$message = '<h2>Chron is working, remvoe test cron job now.</h2>';
$headers = "From: $from/n";
$headers .= "MIM-Version: 1.0/n";
$headers .= "Content-type: text/html; charset=iso-8859-1/n";
mail($to, $subject, $message, $headers);
?>