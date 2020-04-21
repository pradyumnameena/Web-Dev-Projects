<!DOCTYPE html>
<html>
<head>
	<title>Recent Discussions</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="shortcut icon" href="../images/fav.png" type="image/png">
	<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 26px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:16px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 26px;
    border: none;
    cursor: pointer;
    width: 90%;
	font-size:20px;
}
button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.avatar {
    width: 200px;
	height:200px;
    border-radius: 50%;
}

/* The Modal (background) */
.modal {
	display:none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

/* Modal Content Box */
.modal-content {
    background-color: #fefefe;
    margin: 4% auto 15% auto;
    border: 1px solid #888;
    width: 40%; 
	padding-bottom: 30px;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}
.close:hover,.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    animation: zoom 0.6s
}
@keyframes zoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
</style>
</head>
<body>
    <div class="row">
        <div class="col-md-2">
            <div class="row">
              <div class="col-md-10">
                <button type="button" id="popyso" class="btn btn-outline-primary">Overview</button>
              </div>
              <div id="modal-wrappero" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="overview.php"> 
                    <div class="imgcontainer">
                        <span id="cpopyso" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Brief Introduction</h1>
                    </div>
                    <div class="container">
                      <input type="text" placeholder="Enter Unique ID" name="identity">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              <div class="col-md-10">
                <button type="button" id="popyse" class="btn btn-outline-primary">Explore</button>
              </div>
                <div id="modal-wrappere" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="explore.php">  
                    <div class="imgcontainer">
                        <span id="cpopyse" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Explore Discussion</h1>
                    </div>
                    <div class="container">
                      <input type="text" placeholder="Enter Unique ID" name="identity">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
        </div>
        </div>
        <div class="col-md-10" style="height:100vh;overflow:scroll;">
<?php 
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM dischead where priv=0 ORDER BY timeline DESC";
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
// 	echo "<br>";
// 	echo "<div class='row'>";
// 	echo "<div class='col-4'>";
// 	echo "<a class='btn btn-primary' href='../html/overview.html' target='_blank' role='button'>Overview</a>";
// 	echo "</div>";
// 	echo "<div class='col-4'>";
// 	echo "<button type='button' id='popys' class='btn btn-outline-dark'>Explore</button>";
        // echo "<a class='btn btn-outline-dark' id='popys' href='#' role='button'>Jump</a>";
        // echo "<a class='btn btn-outline-dark' id='popys' href='../html/explore.html' target='_blank' role='button'>Jump</a>";
//         echo "<div id='modal-wrapper' class='modal'>";
//   echo "<form class='modal-content animate' name='confirm' method='post' action='explore.php'>";    
//     echo "<div class='imgcontainer'>";
//       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
//     echo "</div>";
//     echo "<div class='container'>";
//       echo "<input type='text' placeholder='Enter Unique ID' name='identity'>";
//       echo "<button type='submit'>Submit</button>";
//     echo "</div>"; 
//   echo "</form>"; 
// echo "</div>";
// 	echo "<a class='btn btn-info' href='../html/explore.html' target='_blank' role='button'>Explore</a>";
// 	echo "</div>";
// 	echo "<div class='col-4'>";
// 	echo "</div>";
// 	echo "</div>";
	echo "</div>";
}
if ($conn->query($sql) === TRUE) {
    echo "";
}
$conn->close();
?>
<script>
var dispe = document.getElementById("modal-wrappere");
document.getElementById("popyse").onclick = function () {
    dispe.style.display = "block";
};

var dispe2 = document.getElementById("modal-wrappere");
document.getElementById("cpopyse").onclick = function () {
    dispe2.style.display = "none";
};

var dispo = document.getElementById("modal-wrappero");
document.getElementById("popyso").onclick = function () {
    dispo.style.display = "block";
};

var dispo2 = document.getElementById("modal-wrappero");
document.getElementById("cpopyso").onclick = function () {
    dispo2.style.display = "none";
};
</script>
</body>
</html>