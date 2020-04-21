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

if(isset($_COOKIE["type"])){
	header("Location: user.php");
}

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM details where email='$email'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if($result->num_rows > 0){
			if($row["password"]==$password){
				if($row["active"]==1){
					setcookie("type",$row["email"],time()+7200);
					
				// 	echo '<script type="text/javascript">direct();</script>';
				    header("Location: user.php");
				}else if($row["active"]==2){
				    echo "Your account has been banned. Register with a different email-id to continue.";
				    exit();
				}else{
					echo "Your account is unconfirmed";
					exit();
				}	
			}else{
				echo "Incorrect Password.";
				exit();
			}
	}else{
// 		echo '<script type="text/javascript">nr();</script>';
        echo "Your email-id is not registered with us.";
		exit();
	}

	$conn->close();
}
?>
<script type="text/javascript">
		function ip(){
			alert("Incorrect password.");
		}
		function nr(){
			alert("Email id is not registered with us.");
		}
		function uc(){
			alert("Please confirm your email-id first.");
		}
		function ban(){
		    alert("Your account has been banned. Please register with a different email-id if you wish to continue");
		}
</script>
