<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hash = md5($password);
	$cont = substr($hash,0,4);
	$subject = 'Activate Your Email'; 
	$headers = 'From: indiawillspeak@gmail.com';
	$message ="There is a code attached in this email at the last. Submit your registered email-id and the code at the given link to activate your account. Your code is ";
	$message.= $cont;
	$message.=" and the link to the verification portal is https://indiawillspeak.000webhostapp.com/html/confirm.html .";
	
	mail($email, $subject, $message, $headers);
?>

