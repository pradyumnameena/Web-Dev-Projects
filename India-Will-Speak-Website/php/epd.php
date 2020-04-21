<script>
    function nf(){
        alert("Already added to your private section.");
    }
</script>
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
$user = $_COOKIE["type"];
$user2 = md5($user);
if(isset($_POST["identity2"])){
    $node = $_POST["identity2"];
    
    $precheck = "select * from ".$user2." where identity='$node'";
    $res = $conn->query($precheck);
    if($res->num_rows>0){
        echo '<script type="text/javascript">nf();</script>';
        exit();
    }
    
    $sql = "insert into ".$user2." (datatype , owner , partner,identity,following,rating,priv) values ('disc',2,0,'$val',0,1)";
    if($conn->query($sql)===TRUE){
        echo "";
    }else{
        
    }
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
        <h1>Discussion has been added to your private section.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>
