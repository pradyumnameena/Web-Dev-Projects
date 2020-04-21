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
if(isset($_POST['identity']) && isset($_POST['poc']) && isset($_POST['comment'])){
$identity = $_POST['identity'];
$message = $_POST['comment'];
$dat = $_POST['poc'];

$validity = "select * from owner where identity='$identity'";
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

$privornot = "select * from dischead where identity='$identity' and priv=1";
$privres = $conn->query($privornot);
if($privres->num_rows>0){
    include 'pnabu.php';
	exit();
}else{
	
}
$privornot2 = "select * from discs where identity='$identity' and priv=1";
$privres2 = $conn->query($privornot2);
if($privres2->num_rows>0){
    include 'pnabu.php';
	exit();
}else{
	
}

$poc = "yo";
if($dat==1){
	$poc="pro";
	$q1 = "select * from discs where identity = '$identity'";
	$r1 = $conn->query($q1);
	$r11 = $r1 -> fetch_assoc();
	$ol = $r11["likes"]+1;
	$t1 = "update discs set likes='$ol' where identity='$identity'";
	if($conn->query($t1)===TRUE){
	    echo "";
	}else{
	    echo "";
	}
	
	$q11 = "select * from dischead where identity = '$identity'";
	$r11 = $conn->query($q11);
	$r111 = $r11 -> fetch_assoc();
	$ol1 = $r111["likes"]+1;
	$t11 = "update dischead set likes='$ol1' where identity='$identity'";
	if($conn->query($t11)===TRUE){
	    echo "";
	}else{
	    echo "";
	}
}else{
	$poc="con";
	$q1 = "select * from discs where identity = '$identity'";
	$r1 = $conn->query($q1);
	$r11 = $r1 -> fetch_assoc();
	$ol = $r11["dislikes"]+1;
	$t1 = "update discs set dislikes='$ol' where identity='$identity'";
	if($conn->query($t1)===TRUE){
	    echo "";
	}else{
	    echo "";
	}
	
	$q11 = "select * from dischead where identity = '$identity'";
	$r11 = $conn->query($q11);
	$r111 = $r11 -> fetch_assoc();
	$ol1 = $r111["dislikes"]+1;
	$t11 = "update dischead set dislikes='$ol1' where identity='$identity'";
	if($conn->query($t11)===TRUE){
	    echo "";
	}else{
	    echo "";
	}
}
$id2 = uniqid();
$sql = "INSERT INTO discs (parent,heading,poc,count,identity,likes,dislikes,rating) 
						VALUES ('$identity','$message','$poc',0,'$id2',0,0,0)";
$sql2 = "INSERT INTO ". $user2 ." (datatype,owner,partner,identity,following) 
						VALUES ('disc',0,2,'$id2',0)";
$sql3 = "select * from discs where identity='$identity'";
$sql4 = "select * from dischead where identity='$identity'";
$result3 = $conn->query($sql3);
while($row3=$result3->fetch_assoc()){
    $val1 = $row3["count"]+1;
    $sql5 = "update discs set count='$val1' where identity='$identity'";
    if ($conn->query($sql5) === TRUE) {
        echo "";
    } else {
        echo "";
    }
}
$result4 = $conn->query($sql4);
while($row4=$result4->fetch_assoc()){
    $val2 = $row4["count"]+1;
    $sql6 = "update dischead set count='$val2' where identity='$identity'";
    if ($conn->query($sql6) === TRUE) {
        echo "";
    } else {
        echo "";
    }
}

if ($conn->query($sql2) === TRUE) {
    echo "";
} else {
    echo "";
}

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "";
}

// owner waali table mein entry krna hai
$fin = "insert into owner (identity,owner) values ('$id2','$user')";
if($conn->query($fin)===TRUE){
    echo "";
}else{
    echo "";
}

$conn->close();

}else{
    echo "please fill all the fields.";
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
        <h1>Your comment has been recorded.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>
