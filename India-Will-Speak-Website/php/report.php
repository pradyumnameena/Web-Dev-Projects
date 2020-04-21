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

if(isset($_POST["identity"])){
    session_start();
    $parent = $_POST["identity"];
    $validity = "select * from owner where identity='$parent'";
    $res = $conn->query($validity);
    if($res->num_rows>0){
    // 	all good
    }else{
    	include 'invalidid.php';
    	exit();
    }
    $sql = "select * from owner where identity='$parent'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $user = $row["owner"];
    $_SESSION["usr"] = $user;
    $sql2 = "select * from report where user='$user'";
    $sql3 = "select * from report2 where user='$user'";
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    if($result2->num_rows>0){
        $rw = $result2->fetch_assoc();
        $init = $rw["numreports"]+1;
        if($init>7){
            $sql911 = "insert into report2 (user,numreports) values ('$user',1)";
            if($conn->query($sql911)===TRUE){
                echo "";
            }else{
                echo "";
            }
            $sql912 = "delete from report where user='$user'";
            if($conn->query($sql912)===TRUE){
                echo "";
            }else{
                echo "";
            }
            include 'fw.php';
        }else{
            $sql4 = "update report set numreports='$init' where user='$user'";
            if($conn->query($sql4)===TRUE){
                echo "";
            }else{
                echo "";
            }
        }
    }else if($result3->num_rows>0){
        $rw2 = $result3->fetch_assoc();
        $init2 = $rw2["numreports"]+1;
        if($init2>8){
            $fin2 = "update details set active=2 where email='$user'";
            if($conn->query($fin2)===TRUE){
                echo "suspended successfully";
            }else{
                echo "error in suspension";
            }
            $fin3 = "delete from report2 where user='$user'";
            if($conn->query($fin3)===TRUE){
                echo "suspended successfully2";
            }else{
                echo "error in suspension2";
            }
            include 'sw.php';
        }else{
           $sql9 = "update report2 set numreports='$init2' where user='$user'";
            if($conn->query($sql9)===TRUE){
                echo "";
            }else{
                echo "";
            }
        }
    }else{
        $sql3 = "insert into report (user,numreports) values ('$user',1)";
        if($conn->query($sql3)===TRUE){
            echo "";
        }else{
            echo "";
        }
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
        <h1>Your feedback has been recorded.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>