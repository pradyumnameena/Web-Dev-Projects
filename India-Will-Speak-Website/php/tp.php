<!DOCTYPE html>
<html>
<head>
	<title>Trending Polls</title>
	<link rel="stylesheet" type="text/css" href="../css/a.css">
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
                <button type="button" id="popyss" class="btn btn-outline-success">Support</button>
              </div>
              <div id="modal-wrappers" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="support.php">  
                    <div class="imgcontainer">
                        <span id="cpopyss" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Support Poll</h1>
                    </div>
                    <div class="containera">
                      <input type="text" placeholder="Enter Unique ID" name="identity">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
                
                <div class="col-md-10">
                <button type="button" id="popysa" class="btn btn-outline-danger">Against</button>
              </div>
              <div id="modal-wrappera" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="against.php">  
                    <div class="imgcontainer">
                        <span id="cpopysa" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Against the Poll</h1>
                    </div>
                    <div class="containera">
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
$sql = "SELECT * FROM polls ORDER BY totalcount DESC";
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
				// echo "<a class='btn btn-success' href='../html/support.html' target='_blank' role='button'>Support</a>";
    echo "</div>";
    echo "<div class='col-6'>";
    echo "<div class='progress'>";
  					echo "<div class='progress-bar bg-danger' role='progressbar' style='width: $h'' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'></div>";
				echo "</div>";
				// echo "<a class='btn btn-danger' href='../html/against.html' target='_blank' role='button'>Against</a>";
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
    </div>
	</div>
	<script>
var disps = document.getElementById("modal-wrappers");
document.getElementById("popyss").onclick = function () {
    disps.style.display = "block";
};

var disps2 = document.getElementById("modal-wrappers");
document.getElementById("cpopyss").onclick = function () {
    disps2.style.display = "none";
};

var dispa = document.getElementById("modal-wrappera");
document.getElementById("popysa").onclick = function () {
    dispa.style.display = "block";
};

var dispa2 = document.getElementById("modal-wrappera");
document.getElementById("cpopysa").onclick = function () {
    dispa2.style.display = "none";
};
	</script>
</body>
</html>

