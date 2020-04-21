<?php
    session_start();
	$email = $_SESSION["usr"];
	$subject = 'Account warning'; 
	$headers = 'From: indiawillspeak@gmail.com';
	$message ="We have received a lot of report against you regarding your comments and discussions. If we receive any more then your account will be terminated.";
	
	mail($email, $subject, $message, $headers);
?>

