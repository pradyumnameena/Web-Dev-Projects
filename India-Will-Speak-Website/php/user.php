<?php
// session_start();
if(!isset($_COOKIE["type"])){
	include 'gotologin.php';
	exit();
}
$user = $_COOKIE["type"];
$user2 = md5($user);
if(isset($_COOKIE["type"])){
	// echo "jkejkrgbjkrgkrebgke";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>You will speak</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/fonts/css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/css2/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/css2/index.css">
  <link rel="shortcut icon" href="../images/fav.png" type="image/png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/js2/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script>
      function recorder(){
          alert("Your opinion has already been recorded.");
      }
  </script>
  <style type="text/css">
  	.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 20px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#everything {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

#everything {
    transition: margin-left .5s;
    padding: 16px;
}
.sec-head{
    text-align: center;
}
.container-in{
	position: relative;
	top: 5vh;
	background-color: rgb(111,173,255);
	opacity: 0.8;
	border-radius: 8px;
}

/*.col{*/
/*	border-radius: 5px;*/
	/*display:inline-block;*/
/*}*/
.row{
    overflow:scroll;
}
.col6{
    height:60px;
    width:100%;
    overflow:scroll;
}
.col3{
	text-align: center;
	width:40vw;
	display:inline-block;
}
.sep{
    display:inline-block;
    width:10px;
}
.col6sp{
    display:inline-block;
    width:30vw;
    position:relative;
    /*left:2vw;*/
}
.lead{
    overflow:scroll;
}
.jumbotron{
    overflow:scroll;
}
.rowsp{
    display:inline-block;
}
  </style>

</head>
<body>
<div id="everything">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <span style="font-size:30px;cursor:pointer;color: white" onclick="openNav()">&#9776;</span>
      <!-- <a class="navbar-brand" href="#">India Will Speak</a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="user.php">Home</a></li>
        <li><a href="../html/create_poll.html" target="_blank">Create Poll</a></li>
        <li><a href="../html/create_disc.html" target="_blank">Create Discussion</a></li>
        <li><a href="../html/search.html">Search</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $user; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="td.php" target="_blank">Trending Discussions</a>
  <a href="tp.php" target="_blank">Trending Polls</a>
  <a href="rd.php" target="_blank">New Discussions</a>
  <a href="rp.php" target="_blank">New Polls</a>
  <a href="../html/follow.html" target="_blank">Follow</a>
  <a href="../html/unfollow.html" target="_blank">Un Follow</a>
  <!--<hr>-->
  <!--<a href="../html/pcreate_disc.html">Create Private</a>-->
  <!--<a href="../html/epd.html">Enter Private</a>-->
  <!--<a href="../html/lpd.html">Leave Private</a>-->
  <hr>
  <a href="../html/aboutus2.php">Contact</a>
  <a href="../html/invite.html">Invite</a>
</div>
 <div class = "container">
     <h3 class="sec-head">My Polls</h3>
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM " .$user2. " where datatype='poll'";
$result = $conn->query($sql);
echo "<div class='row'>";
while($row=$result->fetch_assoc()){
    $req = $row["identity"];
    $sql2 = "select * from polls where identity='$req'";
    $result2 = $conn->query($sql2);
    while($row2=$result2->fetch_assoc()){
        echo "<div class='col-md-4'>";
        echo "<div class='jumbotron' style='width:100%;height:50vh;overflow:scroll;'>";
        echo "<p class='lead'>";
    	echo $row2["heading"];
    	echo "</p><hr><p>";
    	echo "Total ";
    	echo $row2["totalcount"];
    	echo " people have been active on this poll.";
    	echo "<br>";
    	echo "Unique ID: ";
	    echo $row2["identity"];
	    echo "</p>";
	    echo "<div class='row'>";
	    $hund = 100;
	            $l2=0;
                $h2=0;
                if($row2["totalcount"]!=0){
                    $likes2 = $hund*$row2["favor"];
                    $dis2 = $hund*$row2["against"];
                    $lp2 = $likes2/$row2["totalcount"];
                    $l2 = sprintf("%.0f%%", $lp2);
                    $hp2 = $dis2/$row2["totalcount"];
                    $h2 = sprintf("%.0f%%", $hp2);
                }
    	echo "<div class='col-sm-4'>";
        echo "<a class='btn btn-success' href='../html/support.html' target='_blank' role='button'>Support</a>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    	echo "<a class='btn btn-danger' href='../html/against.html' target='_blank' role='button'>Against</a>";
    	echo "</div>";
    	echo "</div>";
    	echo "<br>";
    	echo "<p>FAVOR</p>";
 				echo "<div class='progress'>";
  					echo "<div class='progress-bar bg-success' role='progressbar' style='width: $l2'' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
				echo "</div>";
echo "<p>AGAINST</p>";
				echo "<div class='progress'>";
  				   	echo "<div class='progress-bar bg-danger' role='progressbar' style='width: $h2' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100'></div>";
				echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	
// 		echo "<div class='seperate'><hr></div>"; 
    }
}
echo "</div>";
$conn->close();
?>
 </div>
 <div class = "container">
     <h3 class="sec-head">My Discussions</h3>
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql21 = "select * from ".$user2." where datatype='disc' and owner=1 and priv=0";
$result21 = $conn->query($sql21);
echo "<div class='row'>";
while($row21=$result21->fetch_assoc()){
  $head211 = $row21["identity"];
  $sql211 = "select * from dischead where identity='$head211'";
  $result211 = $conn->query($sql211);
  while($row24=$result211->fetch_assoc()){
      echo "<div class='col-md-4'>";
    echo "<div class='jumbotron' style='width:100%; height: 40vh;overflow:scroll;'>";
    echo "<p class='lead'>";
    echo  $row24["heading"];
    $data = $row24["heading"];
    $name = $data.'s';
	echo "</p><hr><p>";
	echo "Total ";
	echo $row24["count"];
	echo " people have been active on this discussion.";
	echo "<br>";
	echo "Unique ID is ";
	echo $row24["identity"];
	echo "</p>";
	echo "<br>";
	echo "<div class='row'>";
	echo "<div class='col-sm-4'>";
    echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
	echo "</div>";
	echo "<div class='col-sm-4'>";
	echo "</div>";
	echo "<div class='col-sm-4'>";
// 	echo "<button type='button' id='popys1' class='btn btn-outline-dark'>Explore</button>";
	echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	echo "</div>";
// echo "<div id='modal-wrapper1' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' action='explore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
    
	
	echo "</div>";
	echo "</div>";
	echo "</div>";
    }
}
echo "</div>";
$conn->close();
?>
 </div>
 <div class = "container">
     <h3 class="sec-head">My Participation</h3>
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql22 = "select * from ".$user2." where datatype='disc' and priv=0 and owner<>1 and following=0";
$result22 = $conn->query($sql22);
echo "<div class='row'>";
while($row22=$result22->fetch_assoc()){
    $head212 = $row22["identity"];
    $sql212 = "select * from dischead where identity='$head212'";
    $result212 = $conn->query($sql212);
    while($row23=$result212->fetch_assoc()){
        echo "<div class='col-md-4'>";
        echo "<div class='jumbotron' style='width: 100%; height: 40vh; overflow:scroll;'>";
        echo "<p class='lead'>";
    	echo $row23["heading"];
    	echo "</p><hr><p>";
    	echo "Total ";
    	echo $row23["count"];
    	echo " people have been active on this discussion.";
    	echo "<br>";
    	echo "Unique ID is ";
	    echo $row23["identity"];
	    echo "</p>";
	    echo "<br>";
	        echo "<div class='row'>";
	        echo "<div class='col-sm-4'>";
	            echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
	        echo "</div>";
	        echo "<div class='col-sm-4'>";
	        echo "&nbsp";
	        echo "</div>";
	        echo "<div class='col-sm-4'>";
	            echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	        echo "</div>";
	        echo "</div>";
//     echo "<div id='modal-wrapper1' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' action='explore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container1'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
    	echo "</div>";
    	echo "</div>";
    }
    
    $sql215 = "select * from discs where identity='$head212'";
    $result215 = $conn->query($sql215);
    while($row25=$result215->fetch_assoc()){
        echo "<div class='col-md-4'>";
        
         echo "<div class='jumbotron' style='width: 100%; height: 40vh; overflow:scroll;'>";
        echo "<p class='lead'>";
    	echo $row25["heading"];
    	echo "</p><hr><p>";
    	echo "Total ";
    	echo $row25["count"];
    	echo " people have been active on this discussion.";
    	echo "<br>";
    	echo "Unique ID is ";
	    echo $row25["identity"];
	    echo "<br>";
	        echo "<div class='row'>";
	        echo "<div class='col-sm-4'>";
	            echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
	        echo "</div>";
	        echo "<div class='col-sm-4'>";
	        echo "&nbsp";
	        echo "</div>";
	        echo "<div class='col-sm-4'>";
	            echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	        echo "</div>";
	        echo "</div>";
    // 	echo "<div class='row'>";
    // 	echo "<div class='col6sp'>";
    // 	echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
    // 	echo "</div>";
    // 	echo "<div class='col6sp'>";
    // 	echo "<button type='button' id='popys1' class='btn btn-outline-dark'>Explore</button>";
    // 	echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
//     echo "<div id='modal-wrapper1' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' action='explore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container1'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
    // 	echo "</div>";
    // 	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    }
}
echo "</div>";
$conn->close();
?>
 </div>
 
 <div class = "container">
     <h3 class="sec-head">Following</h3>
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql22 = "select * from ".$user2." where datatype='disc' and priv=0 and following=1";
$result22 = $conn->query($sql22);
echo "<div class='row'>";
while($row22=$result22->fetch_assoc()){
    $head212 = $row22["identity"];
    $sql212 = "select * from dischead where identity='$head212'";
    $result212 = $conn->query($sql212);
    while($row23=$result212->fetch_assoc()){
        echo "<div class='col-md-4'>";
        
        echo "<div class='jumbotron'>";
        echo "<p class='lead'>";
    	echo $row23["heading"];
    	echo "</p><hr><p>";
    	echo "Total ";
    	echo $row23["count"];
    	echo " people have been active on this discussion.";
    	echo "<br>";
    	echo "Unique ID is ";
	    echo $row23["identity"];
	    echo "<br>";
    	echo "<div class='row'>";
    	echo "<div class='col-sm-4'>";
    	echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    // 	echo "<button type='button' id='popys1' class='btn btn-outline-dark'>Explore</button>";
    	echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
//     echo "echo <div id='modal-wrapper1' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' action='explore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    }
    
    $sql215 = "select * from discs where identity='$head212'";
    $result215 = $conn->query($sql215);
    while($row25=$result215->fetch_assoc()){
        echo "<div class='col-md-4'>";
        echo "<div class='jumbotron'>";
        echo "<p class='lead'>";
    	echo $row25["heading"];
    	echo "</p><hr><p>";
    	echo "Total ";
    	echo $row25["count"];
    	echo " people have been active on this discussion.";
    	echo "<br>";
    	echo "Unique ID is ";
	    echo $row25["identity"];
	    echo "<br>";
    	echo "<div class='row'>";
    	echo "<div class='col-sm-4'>";
    	echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    // 	echo "<button type='button' id='popys1' class='btn btn-outline-dark'>Explore</button>";
    	echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
//     echo "echo <div id='modal-wrapper1' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' action='explore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    }
}
echo "</div>";
$conn->close();
?>
 </div>
<div class = "container">
   <!--<h3 class="sec-head">Private Discussions</h3>-->
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql21 = "select * from ".$user2." where datatype='disc' and owner=1 and priv=1";
$result21 = $conn->query($sql21);
echo "<div class='row'>";
while($row21=$result21->fetch_assoc()){
  $head211 = $row21["identity"];
  $sql211 = "select * from dischead where identity='$head211'";
  $result211 = $conn->query($sql211);
  while($row24=$result211->fetch_assoc()){
      echo "<div class='col-md-4'>";
    echo "<div class='jumbotron'>";
    echo "<p class='lead'>";
    echo  $row24["heading"];
    $data = $row24["heading"];
    $name = $data.'s';
	echo "</p><hr><p>";
	echo "Total ";
	echo $row24["count"];
	echo " people have been active on this discussion.";
	echo "<br>";
	echo "Unique ID is ";
	echo $row24["identity"];
	echo "<br>";
	echo "<div class='row'>";
	echo "<div class='col-sm-4'>";
    echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
	echo "</div>";
	echo "<div class='col-sm-4'>";
	echo "</div>";
	echo "<div class='col-sm-4'>";
// 	echo "<button type='button' id='popys2' class='btn btn-outline-dark'>Explore</button>";
	echo "<a class='btn btn-info' href='../html/pexplore.html' target='_blank' role='button'>Explore</a>";
// echo "echo <div id='modal-wrapper2' name='confirm' class='modal'>";
//   echo "<form class='modal-content animate' action='pexplore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
    }
}
echo "</div>";
$conn->close();
?>
</div>
<div class = "container">
   <!--<h3 class="sec-head">Privately Joined</h3>-->
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql21 = "select * from ".$user2." where datatype='disc' and owner=2 and priv=1";
$result21 = $conn->query($sql21);
echo "<div class='row'>";
while($row21=$result21->fetch_assoc()){
  $head211 = $row21["identity"];
  $sql211 = "select * from dischead where identity='$head211'";
  $result211 = $conn->query($sql211);
  while($row24=$result211->fetch_assoc()){
      echo "<div class='col-md-4'>";
    echo "<div class='jumbotron'>";
    echo "<p class='lead'>";
    echo  $row24["heading"];
    $data = $row24["heading"];
    $name = $data.'s';
	echo "</p><hr><p>";
	echo "Total ";
	echo $row24["count"];
	echo " people have been active on this discussion.";
	echo "<br>";
	echo "Unique ID is ";
	echo $row24["identity"];
	echo "<br>";
	echo "<div class='row'>";
	echo "<div class='col-sm-4'>";
    echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
	echo "</div>";
	echo "<div class='col-sm-4'>";
	echo "</div>";
	echo "<div class='col-sm-4'>";
// 	echo "<button type='button' id='popys2' class='btn btn-outline-dark'>Explore</button>";
	echo "<a class='btn btn-info' href='../html/pexplore.html' target='_blank' role='button'>Explore</a>";
// echo "echo <div id='modal-wrapper2' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' action='pexplore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
    }
}
echo "</div>";
$conn->close();
?>
</div>
<div class = "container">
   <!--<h3 class="sec-head">Private Participations</h3>-->
<?php
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql22 = "select * from ".$user2." where datatype='disc' and priv=1 and owner<>1 and owner<>2";
$result22 = $conn->query($sql22);
echo "<div class='row'>";
while($row22=$result22->fetch_assoc()){
    $head212 = $row22["identity"];
    $sql212 = "select * from dischead where identity='$head212'";
    $result212 = $conn->query($sql212);
    while($row23=$result212->fetch_assoc()){
        echo "<div class='col-md-4'>";
        echo "<div class='jumbotron'>";
        echo "<p class='lead'>";
    	echo $row23["heading"];
    	echo "</p><hr><p>";
    	echo "Total ";
    	echo $row23["count"];
    	echo " people have been active on this discussion.";
    	echo "<br>";
    	echo "Unique ID is ";
	    echo $row23["identity"];
	    echo "<br>";
    	echo "<div class='row'>";
    	echo "<div class='col-sm-4'>";
    	echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    // 	echo "<button type='button' id='popys2' class='btn btn-outline-dark'>Explore</button>";
    	echo "<a class='btn btn-info' href='../html/pexplore.html' target='_blank' role='button'>Explore</a>";
//     echo "echo <div id='modal-wrapper2' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' action='pexplore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='uname'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    }
    
    $sql215 = "select * from discs where identity='$head212'";
    $result215 = $conn->query($sql215);
    while($row25=$result215->fetch_assoc()){
        echo "<div class='col-md-4'>";
        echo "<div class='jumbotron'>";
        echo "<p class='lead'>";
    	echo $row25["heading"];
    	echo "</p><hr><p>";
    	echo "Total ";
    	echo $row25["count"];
    	echo " people have been active on this discussion.";
    	echo "<br>";
    	echo "Unique ID is ";
	    echo $row25["identity"];
	    echo "<br>";
    	echo "<div class='row'>";
    	echo "<div class='col-sm-4'>";
    	echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    	echo "</div>";
    	echo "<div class='col-sm-4'>";
    	echo "<a class='btn btn-info' href='../html/pexplore.html' target='_blank' role='button'>Explore</a>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    	echo "</div>";
    }
}
echo "</div>";
$conn->close();
?>

<?php 
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from topics order by count DESC";
$result=$conn->query($sql);
$topics=array("yo");
$links=array("yo");
while($row=$result->fetch_assoc()){
    array_push($topics,$row["head"]);
    array_push($links,$row["link"]);
}
$conn->close();
?>
<section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="user.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="../html/aboutus2.php" target="_blank"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="../html/feedback.html" target="_blank"><i class="fa fa-angle-double-right"></i>Feedback</a></li>
                        <li><a href="../html/privacy2.php" target="_blank"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                        <li><a href="../html/termsofservices2.php" target="_blank"><i class="fa fa-angle-double-right"></i>Terms of Services</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <ul class="list-unstyled quick-links">
                        <li><a href=<?php echo $links[1];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[1];?></a></li>
                        <li><a href=<?php echo $links[2];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[2];?></a></li>
                        <li><a href=<?php echo $links[3];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[3];?></a></li>
                        <li><a href=<?php echo $links[4];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[4];?></a></li>
                        <li><a href=<?php echo $links[5];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[5];?></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href=<?php echo $links[6];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[6];?></a></li>
                        <li><a href=<?php echo $links[7];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[7];?></a></li>
                        <li><a href=<?php echo $links[8];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[8];?></a></li>
                        <li><a href=<?php echo $links[9];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[9];?></a></li>
                        <li><a href=<?php echo $links[10];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[10];?></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://facebook.com/indiawillspeaknow" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/will_speak" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/indiawillspeak/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://plus.google.com/u/3/103257441446619323913" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div> 

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h5" style="color: rgb(120,120,120)">&copy All right Reversed.</p>
                    <p class="h5" style="color: rgb(120,120,120)">Developed and Maintained by <span style="color: white"><a href = "../pradysoon.html" title="Hello World!" target="_blank" style="text-decoration: none; color:white">Pradyumna Meena</a></span> and <span style="color: white">Brajmohan Meena</span></p>
                </div>
                </hr>
            </div>  
        </div>
    </section>
</div>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("everything").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("everything").style.marginLeft= "0";
}
</script>
<script>
var modal1 = document.getElementById('modal-wrapper1');
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    
var disp = document.getElementById("modal-wrapper1");
document.getElementById("popys1").onclick = function () {
    disp.style.display = "block";
};
}
</script>
<script>
var modal2 = document.getElementById('modal-wrapper2');
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
    
var disp = document.getElementById("modal-wrapper2");
document.getElementById("popys2").onclick = function () {
    disp.style.display = "block";
};
}
</script>
</body>
</html>
