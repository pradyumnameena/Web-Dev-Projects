<!DOCTYPE html>
<html>
<head>
	<title>Thank you!!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/done.css">
	<link rel='shortcut icon' type='image/x-icon' href='../images/favicon.ico'>
	<meta http-equiv="refresh" content="0;URL=../index.html">
</head>
<body>
	<div class="row main">
		<div class="col-lg-3 col-md-3"></div>
		<div class="col-lg-6 col-md-6 text-center message-container">
			<h1><font size="6" face="Fantasy" color="white">They were the best yet they had to depart.Now its your turn to fulfill their shoes.</font></h1>
			<a class="btn btn-outline-primary btn-lg" href="../index.html" role="button">Home</a>
		</div>
		<div class="col-lg-3 col-md-3"></div>
	</div>

<?php
$servername = "localhost";
$username = "id6075271_nikitadutta";
$password = "nikitadutta";
$dbname = "id6075271_farewell";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$entry = $_POST['entrynumber'];
$ded = $_POST['ded'];
$comm = $_POST['message'];

$sql = "INSERT INTO data (entry,ded,message) 
					VALUES ('$entry','$ded','$comm')";
					if ($conn->query($sql) === TRUE) {
						echo "";
					}else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
$conn->close();
?>

</body>
</html>