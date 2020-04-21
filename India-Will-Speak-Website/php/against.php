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
    $user = $_COOKIE["type"];
    $user2 = md5($user);
    $parent = $_POST["identity"];
    $validity = "select * from owner where identity='$parent'";
    $res = $conn->query($validity);
    if($res->num_rows>0){
        $resrow22 = $res->fetch_assoc();
        if($resrow22["datatype"]!=1){
            include 'notpoll.php';
            exit();
        }else{
            // continue
        }
    }else{
    	include 'invalidid.php';
    	exit();
    }
    // user ki table bhi update krni h
    $sql1 = "select * from ".$user2." where identity='$parent'";
    $result=$conn->query($sql1);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        if($row["partner"]==1){
            include 'alreadyaction.php';
            exit();
        }else{
            $sql8 = "update ".$user2." set partner=1 where identity='$parent'";
            if($conn->query($sql8)===TRUE){
                echo "";
            }else{
                echo "";
            }
        }
    }else{
        $sql2 = "insert into ".$user2." (datatype,owner,partner,identity,following) values ('poll',0,1,'$parent',0)";
        if($conn->query($sql2)===TRUE){
            echo "";
        }else{
            echo "";
        }
    }
    
    $sql4 = "select * from polls where identity='$parent'";
    $result4=$conn->query($sql4);
    $row4 = $result4->fetch_assoc();
    $count = $row4["totalcount"]+1;
    $fav = $row4["against"]+1;
    $sql5 = "update polls set totalcount='$count' where identity='$parent'";
    $sql6 = "update polls set against='$fav' where identity='$parent'";
    if($conn->query($sql5)){
        echo "";
    }else{
        echo "";
    }
    
    if($conn->query($sql6)){
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
        <h1>Your response has been recorded.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>