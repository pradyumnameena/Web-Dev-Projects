<script>
    function nf(){
        alert("You are not following the discussion.");
    }
</script>
<?php
if(!isset($_COOKIE["type"])){
	include 'gotologin.php';
	exit();
}
$identity = $_POST["identity"];
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
if(isset($_POST["identity"])){
    $node = $_POST["identity"];
    $validity = "select * from owner where identity='$node'";
    $res = $conn->query($validity);
    if($res->num_rows>0){
        $resrow22 = $res->fetch_assoc();
        if($resrow22["datatype"]!=0){
            include 'notdis.php';
            exit();
        }else{
            // continue
        }
    }else{
    	include 'invalidid.php';
    	exit();
    }
    $sql = "select * from ".$user2." where identity='$node'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
       $row = $result->fetch_assoc();
       if($row["following"]==1){
            $sql3 = "update ".$user2." set following=0 where identity='$node'";
           if($conn->query($sql3)===TRUE){
                echo "";
            }else{
                echo "";
            }
       }else{
           echo '<script type="text/javascript">nf();</script>';
           exit();
       }
    }else{
        echo '<script type="text/javascript">nf();</script>';
           exit();
    }
}
$conn->close();
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
        <h1>Your preferences has been recorded.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>
