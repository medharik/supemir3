<?php 
extract($_POST);
extract($_GET);
$to = 'cesasup@gmail.com';
$object = 'message de : étudiant d un jours';
$message ="Nom Prénom : $np \nEmail : $email \nTel : $tel\nNiveau : $niveau\nMessage :  $message";
 
$headers  = 'From: cesasup@gmail.com'."\r\n";
$headers .= 'cesasup@gmail.com'."\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
 
mail($to, $object, $message, $headers);
header("location:http://www.cesasup.com");
?>