<!DOCTYPE html>
<html>
<head>
	<title>Advocacy</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
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
$sql = "SELECT * FROM dischead where tag1='advocacy' or tag2='advocacy' or tag3='advocacy' or tag1='Advocacy' or tag2='Advocacy' or tag3='Advocacy' ORDER BY count DESC";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()){
    echo "<div class='jumbotron'>";
    echo "<p class='lead'>";
	echo $row["heading"];
	echo "</p><hr><p>";
	echo "Total ";
	echo $row["count"];
	echo " people have been active on this discussion.";
	echo "<br>";
	echo "Unique ID is ";
	echo $row["identity"];
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
if ($conn->query($sql) === TRUE) {
    echo "";
}
$conn->close();
?>
</body>
</html>