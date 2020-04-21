<?php
    $usr = $_COOKIE["type"];
	$email = $_POST['email4'];
	$id = $_POST["identity"];
	$subject = 'Join the discussion'; 
	$headers = 'From: indiawillspeak@gmail.com';
	$message ="Your friend ";
	$message.=$usr;
	$message.= " has invited you to join this discussion on IWS. Go to https://indiawillspeak.000webhostapp.com and signup now and join this discussion with unique id as ";
	$message.=$id;
	$message.=" .";
	mail($email, $subject, $message, $headers);
?>

