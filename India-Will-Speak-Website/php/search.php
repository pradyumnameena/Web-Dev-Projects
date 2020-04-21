<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="shortcut icon" href="../images/fav.png" type="image/png">
</head>
<body>
<?php 
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["first"]) && isset($_POST["second"]) && isset($_POST["third"])){
   $first = $_POST["first"];
   $sec = $_POST["second"];
   $third = $_POST["third"];
   if($third==""){
   $c2q1 = "select * from dischead where tag1='$first' and tag2='$sec' order by count desc";
   $c2q2 = "select * from dischead where tag1='$sec' and tag2='$first' order by count desc";
   $c2q3 = "select * from dischead where tag2='$first' and tag3='$sec' order by count desc";
   $c2q4 = "select * from dischead where tag2='$sec' and tag3='$first' order by count desc";
   $c2q5 = "select * from dischead where tag3='$first' and tag1='$sec' order by count desc";
   $c2q6 = "select * from dischead where tag3='$sec' and tag1='$first' order by count desc";
   $c2r1 = $conn->query($c2q1);
   $c2r2 = $conn->query($c2q2);
   $c2r3 = $conn->query($c2q3);
   $c2r4 = $conn->query($c2q4);
   $c2r5 = $conn->query($c2q5);
   $c2r6 = $conn->query($c2q6);
   $c2n1 = $c2r1->num_rows;
   $c2n2 = $c2r2->num_rows;
   $c2n3 = $c2r3->num_rows;
   $c2n4 = $c2r4->num_rows;
   $c2n5 = $c2r5->num_rows;
   $c2n6 = $c2r6->num_rows;
      if($c2n1>=$c2n2 && $c2n1>=$c2n3 && $c2n1>=$c2n4 && $c2n1>=$c2n5 && $c2n1>=$c2n6){
       while($c2row1=$c2r1->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c2row1["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c2row1["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c2row1["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c2n2>=$c2n1 && $c2n2>=$c2n3 && $c2n2>=$c2n4 && $c2n2>=$c2n5 && $c2n2>=$c2n6){
       while($c2row2=$c2r2->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c2row2["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c2row2["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c2row2["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c2n3>=$c2n1 && $c2n3>=$c2n2 && $c2n3>=$c2n4 && $c2n3>=$c2n5 && $c2n3>=$c2n6){
       while($c2row3=$c2r3->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c2row3["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c2row3["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c2row3["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c2n4>=$c2n1 && $c2n4>=$c2n2 && $c2n4>=$c2n3 && $c2n4>=$c2n5 && $c2n4>=$c2n6){
       while($c2row4=$c2r4->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c2row4["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c2row4["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c2row4["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c2n5>=$c2n1 && $c2n5>=$c2n2 && $c2n5>=$c2n3 && $c2n5>=$c2n4 && $c2n5>=$c2n6){
       while($c2row5=$c2r5->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c2row5["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c2row5["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c2row5["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else{
       while($c2row6=$c2r6->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c2row6["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c2row6["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c2row6["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   } 
   }else{
   $c1q1 = "select * from dischead where tag1='$first' and tag2='$sec' and tag3='$third' order by count desc";
   $c1q2 = "select * from dischead where tag1='$first' and tag2='$third' and tag3='$sec' order by count desc";
   $c1q3 = "select * from dischead where tag1='$sec' and tag2='$first' and tag3='$third' order by count desc";
   $c1q4 = "select * from dischead where tag1='$sec' and tag2='$third' and tag3='$first' order by count desc";
   $c1q5 = "select * from dischead where tag1='$third' and tag2='$sec' and tag3='$first' order by count desc";
   $c1q6 = "select * from dischead where tag1='$third' and tag2='$first' and tag3='$sec' order by count desc";
   $c1r1 = $conn->query($c1q1);
   $c1r2 = $conn->query($c1q2);
   $c1r3 = $conn->query($c1q3);
   $c1r4 = $conn->query($c1q4);
   $c1r5 = $conn->query($c1q5);
   $c1r6 = $conn->query($c1q6);
   $c1n1 = $c1r1->num_rows;
   $c1n2 = $c1r2->num_rows;
   $c1n3 = $c1r3->num_rows;
   $c1n4 = $c1r4->num_rows;
   $c1n5 = $c1r5->num_rows;
   $c1n6 = $c1r6->num_rows;
   if($c1n1>=$c1n2 && $c1n1>=$c1n3 && $c1n1>=$c1n4 && $c1n1>=$c1n5 && $c1n1>=$c1n6){
       while($c1row1=$c1r1->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c1row1["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c1row1["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c1row1["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c1n2>=$c1n1 && $c1n2>=$c1n3 && $c1n2>=$c1n4 && $c1n2>=$c1n5 && $c1n2>=$c1n6){
       while($c1row2=$c1r2->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c1row2["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c1row2["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c1row2["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c1n3>=$c1n1 && $c1n3>=$c1n2 && $c1n3>=$c1n4 && $c1n3>=$c1n5 && $c1n3>=$c1n6){
       while($c1row3=$c1r3->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c1row3["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c1row3["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c1row3["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c1n4>=$c1n1 && $c1n4>=$c1n2 && $c1n4>=$c1n3 && $c1n4>=$c1n5 && $c1n4>=$c1n6){
       while($c1row4=$c1r4->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c1row4["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c1row4["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c1row4["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else if($c1n5>=$c1n1 && $c1n5>=$c1n2 && $c1n5>=$c1n3 && $c1n5>=$c1n4 && $c1n5>=$c1n6){
       while($c1row5=$c1r5->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c1row5["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c1row5["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c1row5["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }else{
       while($c1row6=$c1r6->fetch_assoc()){
           echo "<div class='jumbotron'>";
           echo "<p class='lead'>";
           echo $c1row6["heading"];
           echo "</p><hr><p>";
           echo "Total ";
           echo $c1row6["count"];
           echo " people have been active on this discussion";
           echo "<br>";
           echo "Unique ID is ";
           echo $c1row6["identity"];
           echo "<br>";
           echo "<div class='row'>";
	       echo "<div class='col-2'>";
           echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
           echo "</div>";
	       echo "<div class='col-10'>";
	        echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
	       echo "</div>";
	       echo "</div>";
	       echo "</div>";
       }
   }
   }
}else{
    echo "";
}
$conn->close();
?>
</body>
</html>