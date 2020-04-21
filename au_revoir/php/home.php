<!DOCTYPE html>
<html>
<head>
	<title>Farewell Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<link rel='shortcut icon' type='image/x-icon' href='../images/favicon.ico'>
</head>
<body>
<?php
$servername = "localhost";
$username = "id6075271_nikitadutta";
$password = "nikitadutta";
$dbname = "id6075271_farewell";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM data";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
	$index = $row["id"];
	$entrynum = $row["entry"];
	$ded = $row["ded"];
	$msg = $row["message"];

	if($ded=="Sai Sir" || $ded=="Sai" || $ded=="sai"){
		if(fmod($index,7)==0){
			$img_src = "<img src='../images/sai/sai1.png' class='person-icon'>";
		}else if(fmod($index,7)==1){
			$img_src = "<img src='../images/sai/sai2.png' class='person-icon'>";
		}else if(fmod($index,7)==2){
			$img_src = "<img src='../images/sai/sai3.png' class='person-icon'>";
		}else if(fmod($index,7)==3){
			$img_src = "<img src='../images/sai/sai4.png' class='person-icon'>";
		}else if(fmod($index,7)==4){
			$img_src = "<img src='../images/sai/sai5.png' class='person-icon'>";
		}else{
			$img_src = "<img src='../images/sai/sai6.png' class='person-icon'>";
		}
	}else if($ded=="Sankalpana Maam" || $ded=="sanki" || $ded=="Sanki" || $ded=="Sankalpana"){
		if(fmod($index,7)==0){
			$img_src = "<img src='../images/sanki/sanki1.png' class='person-icon'>";
		}else if(fmod($index,7)==1){
			$img_src = "<img src='../images/sanki/sanki2.png' class='person-icon'>";
		}else if(fmod($index,7)==2){
			$img_src = "<img src='../images/sanki/sanki3.png' class='person-icon'>";
		}else if(fmod($index,7)==3){
			$img_src = "<img src='../images/sanki/sanki4.png' class='person-icon'>";
		}else if(fmod($index,7)==4){
			$img_src = "<img src='../images/sanki/sanki5.png' class='person-icon'>";
		}else{
			$img_src = "<img src='../images/sanki/sanki6.png' class='person-icon'>";
		}
	}else if($ded=="Vishakha Maam" || $ded=="visky" || $ded=="Visky"){
		if(fmod($index,7)==0){
			$img_src = "<img src='../images/visky/visky1.png' class='person-icon'>";
		}else if(fmod($index,7)==1){
			$img_src = "<img src='../images/visky/visky2.png' class='person-icon'>";
		}else if(fmod($index,7)==2){
			$img_src = "<img src='../images/visky/visky3.png' class='person-icon'>";
		}else{
			$img_src = "<img src='../images/visky/visky4.png' class='person-icon'>";
		}
	}else{
		if(fmod($index,7)==0){
			$img_src = "<img src='../images/sattu/sattu1.png' class='person-icon'>";
		}else if(fmod($index,7)==1){
			$img_src = "<img src='../images/sattu/sattu2.png' class='person-icon'>";
		}else if(fmod($index,7)==2){
			$img_src = "<img src='../images/sattu/sattu3.png' class='person-icon'>";
		}else if(fmod($index,7)==3){
			$img_src = "<img src='../images/sattu/sattu4.png' class='person-icon'>";
		}else{
			$img_src = "<img src='../images/sattu/sattu5.png' class='person-icon'>";
		}
	}

	if(fmod($index,2)!=0){
		echo "<div class='row text-center'>";
		echo "<div class='col-lg-5'>";
		echo "<div class='row'>";
		echo "<div class='col-lg-1 col-md-1'></div>";
		echo "<div class='col-lg-7 col-md-7 person'>";
		echo $msg;
		echo "</div>";
		echo "<div class='col-lg-4 col-md-4'>";
		echo $img_src;
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<div class='col-lg-2'>";
		echo "&nbsp;";
		echo "</div>";
	}else{
		echo "<div class='col-lg-5'>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4 col-md-4'>";
		echo $img_src;
		echo "</div>";
		echo "<div class='col-lg-7 col-md-7 person'>";
		echo $msg;
		echo "</div>";
		echo "<div class='col-lg-1 col-md-1'></div>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo "<br>";
		echo "<br>";
	}
}
$conn->close();
?>
</body>
</html>