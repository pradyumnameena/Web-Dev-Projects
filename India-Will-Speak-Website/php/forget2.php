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
	<script type="text/javascript">
	function func(){
		alert('Code is incorrect.');
	}
</script>
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

if(isset($_POST['email']) && isset($_POST['code'])){
	$email = $_POST['email'];
	$code = $_POST['code'];
	$pwd = $_POST['password'];
	$sql = "SELECT hash FROM details where email='$email'";	
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

		if(substr(md5($row["hash"]),0,4)==$code){
			$quer = "Update details set password='$pwd' where email='$email'";
			$xyz = md5($code);
			$quer2 = "Update details set hash='$xyz' where email='$email'";
			if($conn->query($quer2)===TRUE){
			    echo "";
			}
		    if ($conn->query($quer) === TRUE) {
			echo 'Click <a href="../html/login.html">here</a> to go back to login page.';
		    }
		}else{
			echo '<script type="text/javascript">func();</script>';
		}
	$conn->close();
}
?>
</body>
</html>