<!DOCTYPE html>
<html>
<head>
	<title>Recent Polls</title>
	<link rel="stylesheet" type="text/css" href="../css/a.css">
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
$sql = "SELECT * FROM polls ORDER BY timeline DESC";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()){
    echo "<div class='jumbotron'>";
    echo "<p class='lead'>";
    echo $row["heading"];
    echo "</p>";
    echo "<p>Total ";
    echo $row["totalcount"];
    echo " people have been active on this poll.";
    echo "<br>";
    echo "Unique ID is ";
    echo $row["identity"];
    echo "</p>";
    echo "<hr>";
    echo "<div class='row'>";
                $l=0;
                $h=0;
                $hund=100;
                if($row["totalcount"]!=0){
                    $likes = $hund*$row["favor"];
                    $dis = $hund*$row["against"];
                    $lp = $likes/$row["totalcount"];
                    $l = sprintf("%.0f%%", $lp);
                    $hp = $dis/$row["totalcount"];
                    $h = sprintf("%.0f%%", $hp);  
                }
    echo "<div class='col-6'>";
    echo "<div class='progress'>";
  					echo "<div class='progress-bar bg-success' role='progressbar' style='width: $l'' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
				echo "</div>";
				echo "<a class='btn btn-success' href='../html/support.html' target='_blank' role='button'>Support</a>";
    echo "</div>";
    echo "<div class='col-6'>";
    echo "<div class='progress'>";
  					echo "<div class='progress-bar bg-danger' role='progressbar' style='width: $h'' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
				echo "</div>";
				echo "<a class='btn btn-danger' href='../html/against.html' target='_blank' role='button'>Against</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
if ($conn->query($sql) === TRUE) {
    echo "";
}

$conn->close();
?>
	</div>
</body>
</html>

