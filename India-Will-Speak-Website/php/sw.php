<?php
	session_start();
	$email = $_SESSION["usr"];
	$subject = 'Account warning'; 
	$headers = 'From: indiawillspeak@gmail.com';
	$message ="We have received a lot of report against you regarding your comments and discussions.This is to tell you that we are suspending your account. For continue using IWS login with another email-id.";
	mail($email, $subject, $message, $headers);
?>

