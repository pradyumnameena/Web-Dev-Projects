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
$sql = "select * from modals where identity='$identity'";
$sql2 = "select * from dischead where identity='$identity'";
$result2=$conn->query($sql2);
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$row1 = $result2->fetch_assoc();
$img = $row1["imagelink"];
$head = $row1["heading"];
$head1 = $row["subhead1"];
$id = $row1["identity"];
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Overview</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/fav.png" type="image/png">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<style>
    .imgspl{
        height:100%;
        width:100%;
    }
</style>
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
        <div class="col-md-3"></div>
        <div class="col-md-6" style="overflow:scroll;height:100vh;">
            <div class="jumbotron">
                <p class="h2"><?php echo $head; ?></p>
                <br>
                <div class="container" style="height:100%;width:100%;">
                    <img class="imgspl" src="<?php echo $img;?>"> 
                </div>
                <hr>
                <p class="lead">
                    <?php echo $head1;?>
                </p>
                <p class="lead">
                    Unique ID is <?php echo $id;?>.
                </p>
                <br>
                <button type="button" id="popys" class="btn btn-outline-primary">Explore</button>
            <div id="modal-wrapper" class="modal">
                <form class="modal-content animate" name="confirm" method="post" action="explore.php">  
                <div class="imgcontainer">
                    <span id="cpopys" class="close" title="Close PopUp">&times;</span>
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
        <div class="col-md-3" style="text-align:center;"></div>
    </div>
<script>
var dispra = document.getElementById("modal-wrapper");
document.getElementById("popys").onclick = function () {
    dispra.style.display = "block";
};

var dispra2 = document.getElementById("modal-wrapper");
document.getElementById("cpopys").onclick = function () {
    dispra2.style.display = "none";
};    
</script>
</body>
</html>
