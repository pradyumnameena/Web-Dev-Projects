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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM details where email='$email'";
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
			    include 'alreadyregister.php';
			    exit();
			} else {
				include 'register.php';
			     echo "";
			}
			$hash = md5($password);
	$sql = "INSERT INTO details (email,password,hash,active) 
						VALUES ('$email','$password','$hash',0)";
						if ($conn->query($sql) === TRUE) {
    						echo "";
						} else {
						    echo "";
						    exit();
						}
	$conn->close();
}
?>
</body>
</html>