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

if(isset($_POST["identity"]) && isset($_POST["rating"])){
    $node = $_POST["identity"];
    $val = $_POST["rating"];
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
    $oval = 0;
    $user = $_COOKIE["type"];
    $user2 = md5($user);
    $preq = "select * from ".$user2." where identity='$node' and priv=1";
    $prere = $conn->query($preq);
    if($prere->num_rows>0){
        $prerow = $prere->fetch_assoc();
        if($prerow["rating"]!=0){
            $oval = $prerow["rating"];
            $prere2 = "update ".$user2." set rating='$val' where identity='$node' priv=1";
            if($conn->query($prere2)===TRUE){
                echo "";
            }else{
                echo "";
            }
        }else{
            $prere3 = "update ".$user2." set rating='$val' where identity='$node' and priv=1";
            if($conn->query($prere3)===TRUE){
                echo "";
            }else{
                echo "";
            }
        }
    }else{
        $finfin = "insert into ".$user2." (datatype,owner,partner,identity,following,rating,priv) values ('disc',0,0,'$node',0,'$val',1)";
        if($conn->query($finfin)===TRUE){
            echo "";
        }else{
            echo "";
        }
    }
    
    $sql = "select * from discs where identity='$node' and priv=1";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $dat = $row["rating"]+$val-$oval;
    $sql2 = "update discs set rating='$dat' where identity='$node' and priv=1";
    if($conn->query($sql2)===TRUE){
        echo "";
    }else{
        echo "";
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
        <h1>Your rating has been recorded successfully.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>
