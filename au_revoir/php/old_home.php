<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Farewell</title>
<style>

body{
  background-color: rgb(242,242,242);
}
* {box-sizing: border-box;}
body {
	font-family: Verdana, sans-serif;
	background-image: url("http://levehytter.no/hytter/slides/1920/lys/lys_10.jpg");
	background-size: cover;
	background-attachment: fixed;
	width: 100%;
	}
.mySlides{
	display: none;
	}
img {
	vertical-align: middle;
	}

/* Slideshow container */
.slideshow-container {
	/*border-color: black;*/
	/*border-style: double;*/
	/*border-radius: 1vw;*/
  max-width: 1000px;
  /*max-width: 60vw;*/
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.circle{
	position: relative;
	left: 10vw;
	top: 0.7vh;
	border-radius:6px}
}
div.dparea{
      width: 30vw;
      height: 25vh;
}
div.leftin{
	
	font-size: 3vh;
	float: left;
	width: 30vw;
	height: 70vh;
	/*border-color: rgb(222,222,222);
    border-style: solid;*/
    border-radius: 2vw;
    overflow-y: scroll;
    /*background-color: white;*/
    position: relative;
    left: 1vw;
}
div.middlein{
	font-size: 3vh;
	float: left;
	width: 30vw;
	height: 70vh;
	/*border-color: rgb(222,222,222);
    border-style: solid;*/
    border-radius: 2vw;
    overflow-y: scroll;
    /*background-color: white;*/
    position: relative;
    left: 4vw;
    
}
div.rightin{
	font-size: 3vh;
	float: left;
	width: 30vw;
	height: 70vh;
	/*border-color: rgb(222,222,222);
	border-style: solid;*/
	border-radius: 2vw;
	overflow-y: scroll;
	/*background-color: white;*/
    position: relative;
    left: 7vw; 
}
div.inside{
	font-size: 3vh;
	width: 29vw;
	height: 68vh;
	border-radius: 2vw;
	overflow-y: scroll;
	background-color: white;
	/*border-color: yellow;*/
	/*border-style: double;*/
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img6.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img3.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img5.jpg" style="width:100%">
  <div class="text"></div>
</div>



<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img7.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img8.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img11.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img9.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="photos/others/img10.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

// function showSlides() {
//     var i;
//     var slides = document.getElementsByClassName("mySlides");
//     var dots = document.getElementsByClassName("dot");
//     for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";  
//     }
//     slideIndex++;
//     if (slideIndex > slides.length) {slideIndex = 1}    
//     for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//     }
//     slides[slideIndex-1].style.display = "block";  
//     dots[slideIndex-1].className += " active";
//     setTimeout(showSlides, 1600); // Change image every 2 seconds
// }

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 2500); // Change image every 3 seconds
}
</script>

<?php
$servername = "localhost";
$username = "id6075271_nikitadutta";
$password = "nikitadutta";
$dbname = "id6075271_farewell";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

			$sql = "SELECT * FROM data";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			    	$divide = 3;
			    	$one=1;
			    	$two = 2;
			    	$zero = 0;
			    	$four = 4;
			    	$five = 5;
			    	$six = 6;
			    	$seven = 7;
			    	$three=3;
			    	$index = $row["id"];
			    	$entrynum = $row["entry"];
			    	$ded = $row["ded"];
			    	$msg = $row["message"];
			    	$sai1 = "sai";
			    	$sai2 = "Sai";
			    	$sanki1 = "sankalpana";
			    	$sanki2 = "sanki";
			    	$sanki3 = "Sanki";
			    	$sanki4 = "Sankalpana";
			    	$sattu1 = "Sathvic";
			    	$sattu2 = "sathvic";
			    	$sattu3 = "sattu";
			    	$sattu4 = "Sattu";
			    	$visky1 = "Vishakha";
			    	$visky2 = "Visky";
			    	$visky3 = "visky";
			    	$visky4 = "vishakha";


			    	if(fmod($index,$divide)==$one){
			    		echo "<div class='leftin'>";
			    		echo "<div class='inside'>"; 
			    	}else if(fmod($index,$divide)==$two){
			    		echo "<div class='middlein'>";
			    		echo "<div class='inside'>"; 
			    	}else{
			    		echo "<div class='rightin'>";
			    		echo "<div class='inside'>"; 
			    	}
			        echo "<div class='dparea'>";
			        if($ded==$sai1 || $ded==$sai2){
			        	if(fmod($index,$six)==$zero){
			        		echo "<img src='photos/sai/sai1.jpg' class='circle'>";
			        	}else if(fmod($index,$six)==$one){
			        		echo "<img src='photos/sai/sai2.jpg' class='circle'>";
			        	}else if(fmod($index,$six)==$two){
			        		echo "<img src='photos/sai/sai3.jpg' class='circle'>";
			        	}else if(fmod($index,$six)==$three){
			        		echo "<img src='photos/sai/sai4.jpg' class='circle'>";
			        	}else if(fmod($index,$six)==$four){
			        		echo "<img src='photos/sai/sai5.jpeg' class='circle'>";
			        	}else{
			        		echo "<img src='photos/sai/sai6.jpg' class='circle'>";
			        	}
			        }else if($ded==$sanki1 || $ded==$sanki2 || $ded==$sanki3 || $ded==$sanki4){
			        	if(fmod($index,$five)==$zero){
			        		echo "<img src='photos/sanki/sanki1.jpg' class='circle'>";
			        	}else if(fmod($index,$five)==$one){
			        		echo "<img src='photos/sanki/sanki2.jpg' class='circle'>";
			        	}else if(fmod($index,$five)==$two){
			        		echo "<img src='photos/sanki/sanki3.jpg' class='circle'>";
			        	}else if(fmod($index,$five)==$three){
			        		echo "<img src='photos/sanki/sanki4.jpg' class='circle'>";
			        	}else{
							echo "<img src='photos/sanki/sanki5.jpg' class='circle'>";
			        	}
			        }else if($ded==$sattu1 || $ded==$sattu2 || $ded==$sattu3 || $ded==$sattu4){
			        	if(fmod($index,$four)==$zero){
			        		echo "<img src='photos/sattu/sathvic.jpg' class='circle'>";
			        	}else if(fmod($index,$four)==$one){
			        		echo "<img src='photos/sattu/sattu1.jpg' class='circle'>";
			        	}else if(fmod($index,$four)==$two){
			        		echo "<img src='photos/sattu/sattu2.jpg' class='circle'>";
			        	}else{
							echo "<img src='photos/sattu/sattu3.jpg' class='circle'>";
			        	}
			        }else{
			        	if(fmod($index,$seven)==$zero){
			        		echo "<img src='photos/visky/visky1.jpg' class='circle'>";
			        	}else if(fmod($index,$seven)==$one){
			        		echo "<img src='photos/visky/visky2.jpg' class='circle'>";
			        	}else if(fmod($index,$seven)==$two){
			        		echo "<img src='photos/visky/visky3.jpg' class='circle'>";
			        	}else if(fmod($index,$seven)==$three){
			        		echo "<img src='photos/visky/visky4.jpg' class='circle'>";
			        	}else if(fmod($index,$seven)==$four){
			        		echo "<img src='photos/visky/visky5.jpg' class='circle'>";
			        	}else if(fmod($index,$seven)==$five){
			        		echo "<img src='photos/visky/visky7.jpg' class='circle'>";
			        	}else{
			        		echo "<img src='photos/visky/visky6.jpg' class='circle'>";
			        	}
			        }
			        echo "</div>";
			        echo "<hr>";
			        echo $msg;
			        echo "<br>";
			        echo "</div>";
			        echo "</div>";

			    }
			} else {
			    echo "";
			}
			
			$conn->close();
	
?>
</body>
</html> 
