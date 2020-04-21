<!DOCTYPE html>
<html>
<head>
    <title>Explore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/fav.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script>
    function nf(){
        alert("Entered id-number is incorrect. Please try again.");
    }
</script>
<style type="text/css">
    .jumbotron{
			background-color: rgb(80,142,152);
		}
	body{
		background-color: rgb(248,249,250);
	}
	.textarea{
	    /*width:100%;*/
	    /*border-color:black;*/
	    /*border-style:double;*/
	}
</style>
</head>
<body>
<?php
$identity = $_POST["identity"];
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "select * from dischead where identity='$identity' and priv=1";
$result1 = $conn->query($sql1);
$sql2 = "select * from discs where identity='$identity' and priv=1";
$result2 = $conn->query($sql2);
$hund = 100;
if($result1->num_rows>0){
    $row1 = $result1->fetch_assoc();
    $head1 = $row1["heading"];
    echo "<div class='container'>";
        echo "<div class='jumbotron'>";
            echo $row1["heading"];
            echo "<hr>";
            echo "Unique ID is ";
	    echo $row1["identity"];
	        echo "<br>";
	        echo "This is the root discussion.";
	        echo "<br>";
                echo "<div class='row'>";
                $l=0;
                $h=0;
                if($row1["count"]!=0){
                    $likes = $hund*$row1["likes"];
                    $dis = $hund*$row1["dislikes"];
                    $lp = $likes/$row1["count"];
                    $l = sprintf("%.0f%%", $lp);
                    $hp = $dis/$row1["count"];
                    $h = sprintf("%.0f%%", $hp);  
                }
    				echo "<div class='col-6'>";
    					echo "<div class='progress'>";
    					  echo "<div class='progress-bar progress-bar-striped progress-bar-animated bg-success' role='progressbar' aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' style='width: $l'>";
    					  echo "</div>";
    					echo "</div>";
    				echo "</div>";
    				echo "<div class='col-6'>";
    					echo "<div class='progress'>";
    					  echo "<div class='progress-bar progress-bar-striped progress-bar-animated bg-danger' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: $h'>";
    					  echo "</div>";
    					echo "</div>";
    				echo "</div>";
    			echo "</div>";
    echo "<div class='well well-lg' style='text-align: center;'>";
    echo "<br>";
    echo "<div class='row'>";
        echo "<div class='col-sm-4'>";
        echo "<a class='btn btn-outline-dark' href='../html/pcomment.html' target='_blank' role='button'>Add Comment</a>";
        echo "</div>";
        echo "<div class='col-sm-4'>";
        echo "<a class='btn btn-outline-dark' href='../html/pexplore.html' target='_blank' role='button'>Jump</a>";
        echo "</div>";
        echo "<div class='col-sm-4'>";
        echo "<a class='btn btn-outline-dark' href='../html/report.html' target='_blank' role='button'>Report</a>";
        echo "</div>";
    echo "</div>";
    echo "</div>";
        echo "</div>";
        // jumbotron ends here
        echo "<div class='row'>";
			echo "<div class='col-6' style='text-align: center;'>";
				echo "<button type='button' class='btn btn-success'>PROS</button>";
			echo "</div>";
			echo "<div class='col-6' style='text-align: center;'>";
				echo "<button type='button' class='btn btn-danger'>CONS</button>";
			echo "</div>";
		echo "</div>";
		echo "<div class='row'>";
			echo "<div class='col-6'>";
				echo "<hr>";
			echo "</div>";
			echo "<div class='col-6'>";
				echo "<hr>";
			echo "</div>";
		echo "</div>";
        // main content starts from here
        echo "<div class='row'>";
            echo "<div class='col-sm-6'>";
                $proq = "select * from discs where parent='$identity' and priv=1";
                $presult = $conn->query($proq);
                while($prod=$presult->fetch_assoc()){
                    if($prod["poc"]=="pro"){
                        echo $prod["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $prod["identity"];
                        echo "<br>";
                        echo "<div class='row'>";
                        echo "<div class='col-sm-2'>";
                         echo "<a class='btn btn-outline-primary' href='../html/plike.html' target='_blank' role='button'>Like It</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/pdislike.html' target='_blank' role='button'>Dislike</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/prate.html' target='_blank' role='button'>Rate</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr>";
                    }
                }
            echo "</div>";
            echo "<div class='col-sm-6'>";
                // here comes the cons
                $conq = "select * from discs where parent='$identity' and priv=1";
                $cresult = $conn->query($conq);
                while($cond=$cresult->fetch_assoc()){
                    if($cond["poc"]=="con"){
                        echo $cond["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $cond["identity"];
                        echo "<br>";
                        echo "<div class='row'>";
                        echo "<div class='col-sm-2'>";
                         echo "<a class='btn btn-outline-primary' href='../html/plike.html' target='_blank' role='button'>Like It</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/pdislike.html' target='_blank' role='button'>Dislike</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/prate.html' target='_blank' role='button'>Rate</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr>";
                    }
                }
            echo "</div>";
        echo "</div>";
    echo "</div>";
}else if($result2->num_rows>0){
    $row2 = $result2->fetch_assoc();
    echo "<div class='container'>";
        echo "<div class='jumbotron'>";
            echo $row2["heading"];
            echo "<hr>";
            echo "Unique ID is ";
	    echo $row2["identity"];
	        echo "<br>";
	        $dadans = "select * from discs where identity = '$identity' and priv=1";
	        $res = $conn->query($dadans);
	        $r = $res->fetch_assoc();
	        echo $r["parent"];
	        echo " is parent's unique ID.";
	        echo "<br>";
                echo "<div class='row'>";
                $l2=0;
                $h2=0;
                if($row2["count"]!=0){
                    $likes2 = $hund*$row2["likes"];
                    $dis2 = $hund*$row2["dislikes"];
                    $lp2 = $likes2/$row2["count"];
                    $l2 = sprintf("%.0f%%", $lp2);
                    $hp2 = $dis2/$row2["count"];
                    $h2 = sprintf("%.0f%%", $hp2);
                }
    				echo "<div class='col-6'>";
    					echo "<div class='progress'>";
    					  echo "<div class='progress-bar progress-bar-striped progress-bar-animated bg-success' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: $l2'>";
    					  echo "</div>";
    					echo "</div>";
    				echo "</div>";
    				echo "<div class='col-6'>";
    					echo "<div class='progress'>";
    					  echo "<div class='progress-bar progress-bar-striped progress-bar-animated bg-danger' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: $h2'>";
    					  echo "</div>";
    					echo "</div>";
    				echo "</div>";
    			echo "</div>";
    			echo "<div class='well well-lg' style='text-align: center;'>";
    echo "<br>";
    echo "<div class='row'>";
        echo "<div class='col-sm-4'>";
        echo "<form action='../html/pcomment.html'>";
    					echo "<input class='btn btn-outline-dark' type='submit' name='addc' target='_blank' value='Add Comment'>";
    				echo "</form>";
        echo "</div>";
        echo "<div class='col-sm-4'>";
        echo "<form action='../html/pexplore.html'>";
    					echo "<input class='btn btn-outline-dark' type='submit' name='addc' target='_blank' value='Jump'>";
    				echo "</form>";
        echo "</div>";
        echo "<div class='col-sm-4'>";
        echo "<form action='../html/report.html'>";
    					echo "<input class='btn btn-outline-dark' type='submit' name='addc' target='_blank' value='Report'>";
    				echo "</form>";
        echo "</div>";
    echo "</div>";
    echo "</div>";
        echo "</div>";
        // jumbotron ends here
        echo "<div class='row'>";
			echo "<div class='col-6' style='text-align: center;'>";
				echo "<button type='button' class='btn btn-success'>PROS</button>";
			echo "</div>";
			echo "<div class='col-6' style='text-align: center;'>";
				echo "<button type='button' class='btn btn-danger'>CONS</button>";
			echo "</div>";
		echo "</div>";
		echo "<div class='row'>";
            echo "<div class='col-sm-6'>";
                $proq = "select * from discs where parent='$identity' and priv=1";
                $presult = $conn->query($proq);
                while($prod=$presult->fetch_assoc()){
                    if($prod["poc"]=="pro"){
                        echo $prod["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $prod["identity"];
                        echo "<br>";
                        echo "<div class='row'>";
                        echo "<div class='col-sm-2'>";
                         echo "<a class='btn btn-outline-primary' href='../html/plike.html' target='_blank' role='button'>Like It</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/pdislike.html' target='_blank' role='button'>Dislike</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/prate.html' target='_blank' role='button'>Rate</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr>";
                    }
                }
            echo "</div>";
            echo "<div class='col-sm-6'>";
                // here comes the cons
                $conq = "select * from discs where parent='$identity'";
                $cresult = $conn->query($conq);
                while($cond=$cresult->fetch_assoc()){
                    if($cond["poc"]=="con"){
                        echo $cond["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $cond["identity"];
                        echo "<br>";
                        echo "<div class='row'>";
                        echo "<div class='col-sm-2'>";
                         echo "<a class='btn btn-outline-primary' href='../html/plike.html' target='_blank' role='button'>Like It</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/pdislike.html' target='_blank' role='button'>Dislike</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        echo "</div>";
                        echo "<div class='col-sm-2'>";
                        echo "<a class='btn btn-outline-info' href='../html/prate.html' target='_blank' role='button'>Rate</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<hr>";
                    }
                }
            echo "</div>";
        echo "</div>";
}else{
    echo '<script type="text/javascript">nf();</script>';
    exit();
}
?>
</body>
</html>