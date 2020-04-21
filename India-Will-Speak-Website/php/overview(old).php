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
<style type="text/css">
    .col-md-6{
        overflow:scroll;
    }
    body{
        background-image:url("../images/overview.jpg");
        background-size:cover;
        background-attachment:fixed;
    }
</style>
</head>
<body>
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <br><br>
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <img src="<?php echo $img;?>" class="img-circle mx-auto d-block" align="center" width="100%" height="400">
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    <hr>
        <p class="lead"><?php echo $head;?></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container">
                <br><br>
                <div class="jumbotron" style="opacity:0.8">
                    <?php echo $head1;?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
