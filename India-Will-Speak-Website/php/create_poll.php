<?php 
if(!isset($_COOKIE["type"])){
	include 'gotologin.php';
	exit();
}

$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['comment'])){
$message = $_POST['comment'];
$name = md5($message);
$start = strtotime("29 June 2018");
$diff = strtotime("now")-$start;
$user = $_COOKIE["type"];
$user2 = md5($user);
$val = uniqid();
$sql2 = "INSERT INTO ". $user2 ." (datatype,owner,partner,identity,following) 
						VALUES ('poll',1,0,'$val',0)";
						if ($conn->query($sql2) === TRUE) {
                            echo "";
                        } else {
                            echo "";
                        }
$sql = "INSERT INTO polls (heading,favor,against,timeline,totalcount,identity) 
						VALUES ('$message',0,0,'$diff',0,'$val')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "";
}

$sqlf = "INSERT INTO owner (identity,owner,datatype) 
						VALUES ('$val','$user',1)";
if ($conn->query($sqlf) === TRUE) {
    echo "";
} else {
    echo "";
}						

$conn->close();
}
?>
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
        <h1>Your poll has been created.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>
