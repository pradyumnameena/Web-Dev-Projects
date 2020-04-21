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
	$Id = $_SESSION['id'];
	$Name = $_SESSION['name'];
	$Email =$_SESSION['email'];

	$check="SELECT * FROM glogin WHERE Id = '$Id'";
	$rs = mysqli_query($con,$check);
	$data = mysqli_fetch_array($rs, MYSQLI_NUM);

	if($data[0] > 1) {
	    // echo "User Already in Exists<br/>";
	}
	else{
		$sql = "INSERT INTO glogin (Id, Name, Email) VALUES ('$Id', '$Name', '$Email')";
		
		if (!mysqli_query($con,$sql)) {
			// echo 'Not inserted';
		}
		else{
			// echo 'inserted';
		}

	}
	// echo $Email;
	setcookie("type",$Email,time()+3600);
	
	// if(!isset($_COOKIE["type"])) {
 //    	echo "Cookie named '" . "type" . "' is not set!";
 //    // 	include '../html/aboutus.html';
 //  		// exit();
	// } else {
	//     echo "Cookie '" . "type" . "' is set!<br>";
	//     echo "Value is: " . $_COOKIE["type"];
	// }
    header("Location: ../php/user.php");


	// header("refresh:0; url=../index.html")
?>

</body>
</html>