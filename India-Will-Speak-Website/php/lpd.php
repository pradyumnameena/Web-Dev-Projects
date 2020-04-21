<script>
    function nf(){
        alert("Please enter a valid ID.");
    }
</script>
<?php 
if(!isset($_COOKIE["type"])){
	include 'gotologin.php';
	exit();
}
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user = $_COOKIE["type"];
$user2 = md5($user);
if(isset($_POST["identity2"])){
    $node = $_POST["identity2"];
    
    $precheck1 = "select * from owner where identity='$node' and datatype=0";
    $res = $conn->query($precheck1);
    if($res->num_rows>0){
        // do nothing
    }else{
        echo '<script type="text/javascript">nf();</script>';
        exit(); 
    }
    
    $precheck = "select * from ".$user2." where identity='$node' and priv=1";
    $res = $conn->query($precheck);
    if($res->num_rows>0){
        // do the actual work here.
        $sqlur = "delete from ".$user2." where identity='$node'";
	    if($conn->query($sqlur)===TRUE){
	        echo "";
	    }else{
	        echo "";
	    }

	    $arr = array($node);
	    while(count($arr)!=0){
	    	$sqlcr = "select * from discs where parent='$node'";
	    	$rescr = $conn->query($sqlcr);
	    	while($rw=$rescr->fetch_assoc()){
	    		array_push($arr, $rw["identity"]);
	    	}
	    	$node = $arr[0];
	    	$sqlur2 = "delete from ".$user2." where identity='$node'";
		    if($conn->query($sqlur2)===TRUE){
		        echo "";
		    }else{
		        echo "";
		    }
	    	array_splice($arr,0,1);
	    }
    }else{
        include 'pnabu.php';
        // echo '<script type="text/javascript">nf();</script>';
        exit(); 
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<link rel="shortcut icon" href="../images/fav.png" type="image/png">
	<style type="text/css">
		body{
			background-color: rgb(228,231,235);
		}
	</style>
</head>
<body>
	<div class="jumbotron text-center">
      <div class="container">
        <h1>Discussion has been removed from your private section.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>
