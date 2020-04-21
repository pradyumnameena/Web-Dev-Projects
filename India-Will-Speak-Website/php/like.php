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

if(isset($_POST["identity2"])){
    $user = $_COOKIE["type"];
    $user2 = md5($user);
    // $parent = $_POST["identity1"];
    $child = $_POST["identity2"];
    $validity = "select * from owner where identity='$child'";
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
    
$privornot = "select * from dischead where identity='$child' and priv=1";
$privres = $conn->query($privornot);
if($privres->num_rows>0){
    include 'pnabu.php';
	exit();
}else{
	
}
$privornot2 = "select * from discs where identity='$child' and priv=1";
$privres2 = $conn->query($privornot2);
if($privres2->num_rows>0){
    include 'pnabu.php';
	exit();
}else{
	
}
    
    // user ki table bhi update krni h
    
    $us = "select * from ".$user2." where identity='$child'";
    $resultus = $conn->query($us);
    if($resultus->num_rows>0){
        $rw = $resultus->fetch_assoc();
        if($rw["partner"]==1){
            // alert krna hai
            include 'alreadylike.php';
            exit();
        }
        $us1 = "update ".$user2." set partner=1 where identity='$child'";
        if($conn->query($us1)===TRUE){
            echo "";
        }else{
            echo "";
        }
    }else{
        $us2 = "insert into ".$user2." (datatype,owner,partner,identity,following) values ('disc',0,1,'$child',0)";
        if($conn->query($us2)===TRUE){
            echo "";
        }else{
            echo "";
        }
    }
    
    $sql = "select * from discs where identity='$child'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $init = $row["count"]+1;
    $initl = $row["likes"]+1;
    $parent = $row["parent"];
    $sql11 = "update discs set count='$init' where identity='$child'";
    $sql12 = "update discs set likes='$initl' where identity='$child'";
    if($conn->query($sql11)===TRUE){
        echo "";
    }else{
        echo "";
    }
    if($conn->query($sql12)===TRUE){
        echo "";
    }else{
        echo "";
    }
    
    $sql22 = "select * from discs where parent='$parent'";
    $count = 0;
    $lcount = 0;
    $result22 = $conn->query($sql22);
    while($row21=$result22->fetch_assoc()){
        $init1 = $count+$row21["count"];
        $init2 = $lcount+$row21["likes"];
        $count = $init1;
        $lcount= $init2;
    }
    // ab sirf set krna h
    
    $sqlf1 = "select * from dischead where identity='$parent'";
    $rf1 = $conn->query($sqlf1);
    $sqlg1 = "select * from discs where identity='$parent'";
    $rg1 = $conn->query($sqlg1);
    if($rf1->num_rows>0){
        $fr1 = $rf1->fetch_assoc();
        $sqlf2 = "update dischead set count='$count' where identity='$parent'";
        if($conn->query($sqlf2)===TRUE){
            echo "";
        }else{
            echo "";
        }
        $sqlf3 = "update dischead set likes='$lcount' where identity='$parent'";
        if($conn->query($sqlf3)===TRUE){
            echo "";
        }else{
            echo "";
        }  
    }else{
        $gr1 = $rg1->fetch_assoc();
        $sqlg2 = "update discs set count='$count' where identity='$parent'";
        if($conn->query($sqlg2)===TRUE){
            echo "";
        }else{
            echo "";
        }
        $sqlg3 = "update discs set likes='$lcount' where identity='$parent'";
        if($conn->query($sqlg3)===TRUE){
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
        <h1>Your response has been recorded.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>
