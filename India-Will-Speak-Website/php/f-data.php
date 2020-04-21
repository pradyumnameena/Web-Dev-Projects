<?php
	session_start();

	if (!isset($_SESSION['access_token'])) {
		header('Location: ../html/login.php');
		exit();
	}
?>

<!doctype html>
<html lang="en">
<head>
</head>

<body>

<?php
$servername = 'localhost';
$username = 'brajmeena';
$password = 'brajmeena';
$dbname = 'login';

$con = mysqli_connect('127.0.0.1', 'root', '');

if (!$con){
	echo 'Not connected to server';
}

if(!mysqli_select_db($con, 'login')) {
	echo 'database Not selected';
}
	$Id = $_SESSION['userData']['id'];
	$Name =$_SESSION['userData']['name'];

	$check="SELECT * FROM flog WHERE Id = '$Id'";
	$rs = mysqli_query($con,$check);
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);
	if($data[0] > 1) {
	}
	else{
	$sql = "INSERT INTO flog (Id, Name) VALUES ('$Id', '$Name')";
		
		if (!mysqli_query($con,$sql)) {
			// echo 'Not inserted';
		}
		else{
			// echo 'inserted';
		}
	}
	
	setcookie("type",$Name,time()+3600);
    header("Location: ../php/user.php");

	// header("refresh:0; url=../index.html")
?>

</body>
</html>