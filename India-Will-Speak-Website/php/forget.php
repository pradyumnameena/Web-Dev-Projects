<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="shortcut icon" href="../images/fav.png" type="image/png">
	<style type="text/css">
		body{
			background-color: rgb(228,231,235);
		}
	</style>
</head>
<body>
	<div class="jumbotron text-center">
      <div class="container">
        <h1>Thank you for joining us!</h1>
        <p>A link along with a confirmation code has been sent to the registered email-id.</p>
        <a href="../index.html" class="btn btn-primary">Home</a>
      </div>
    </div>
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['name'])){
$email = $_POST['name'];
$sql = "SELECT hash FROM details where email='$email'";	
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$hash = $row["hash"];
$cont = md5($hash);
$cont2 = substr($cont,0,4);

	$subject = 'Reset your password'; 
	$headers = 'From: indiawillspeak@gmail.com';
	$message ="There is a code attached in this email at the last. Submit your registered email-id and the code at the given link to reset your password. Your code is ";
	$message.= $cont2;
	$message.=" and the link to the verification portal is https://indiawillspeak.000webhostapp.com/html/forget_confirm.html .";
	
	mail($email, $subject, $message, $headers);

$conn->close();
}
?>
</body>
</html>