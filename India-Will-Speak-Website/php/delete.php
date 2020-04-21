<?php 
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["identity"])){
    $node = $_POST["identity"];


    // removing it from headimg
    
    $sqlrmi = "select * from dischead where identity = '$node'";
    $res = $conn->query($sqlrmi);
    $r = $res->fetch_assoc();
    $file = $r["imagelink"];
    if (!unlink($file)){
      echo "";
      }else{
          echo "image deleted successfully";
      }
      
    // removing it from dischead
    $sqldhr = "delete from dischead where identity='$node'";
    if($conn->query($sqldhr)===TRUE){
        echo "";
    }else{
        echo "";
    }
    
    
    
    // deleting from modals
    $sqldhrm = "delete from modals where identity='$node'";
    if($conn->query($sqldhrm)===TRUE){
        echo "";
    }else{
        echo "";
    }

    // removing it from discs
    $sqldr = "delete from discs where identity='$node'";
    if($conn->query($sqldr)===TRUE){
        echo "";
    }else{
        echo "";
    }

    // removing it from owner after recovering its owner
    $sqloudh = "select * from owner where identity='$node'";
    $resoudh = $conn->query($sqloudh);
    $rowoudh = $resoudh->fetch_assoc();
    $dhou = $rowoudh["owner"];
    $sqlour = "delete from owner where identity='$node'";
    if($conn->query($sqlour)===TRUE){
        echo "";
    }else{
        echo "";
    }
    $user2 = md5($dhou);

    // removing it from the user's table
    $sqlur = "delete from ".$user2." where identity='$node'";
    if($conn->query($sqlur)===TRUE){
        echo "";
    }else{
        echo "";
    }

    // removing it from all user's table if they took a part in it
    $sqlautr = "select * from details";
    $resautr = $conn->query($sqlautr);
    while($row=$resautr->fetch_assoc()){
    	$cusr = md5($row["email"]);
    	$sqlrfcu = "delete from ".$cusr." where identity='$node'";
    	if($conn->query($sqlrfcu)===TRUE){
    		echo "";
    	}else{
    		echo "";
    	}
    }

    // adding its children into array
    $arr = array($node);
    while(count($arr)!=0){
    	$sqlcr = "select * from discs where parent='$node'";
    	$rescr = $conn->query($sqlcr);
    	while($rw=$rescr->fetch_assoc()){
    		array_push($arr, $rw["identity"]);
    	}
    	$node = $arr[0];

    	// removing it from discs
    	$sqldr2 = "delete from discs where identity='$node'";
	    if($conn->query($sqldr2)===TRUE){
	        echo "";
	    }else{
	        echo "";
	    }

	    // removing it from owner after recovering its owner
	    $sqloudh2 = "select * from owner where identity='$node'";
	    $resoudh2 = $conn->query($sqloudh2);
	    $rowoudh2 = $resoudh2->fetch_assoc();
	    $dhou2 = $rowoudh2["owner"];
	    $sqlour2 = "delete from owner where identity='$node'";
	    if($conn->query($sqlour2)===TRUE){
	        echo "";
	    }else{
	        echo "";
	    }
	    $user22 = md5($dhou2);

	    // removing it from the user's table
	    $sqlur2 = "delete from ".$user22." where identity='$node'";
	    if($conn->query($sqlur2)===TRUE){
	        echo "";
	    }else{
	        echo "";
	    }

	    // removing it from all user's table if they took a part in it
	    $sqlautr2 = "select * from details";
	    $resautr2 = $conn->query($sqlautr2);
	    while($row2=$resautr2->fetch_assoc()){
	    	$cusr2 = md5($row2["email"]);
	    	$sqlrfcu2 = "delete from ".$cusr2." where identity='$node'";
	    	if($conn->query($sqlrfcu2)===TRUE){
	    		echo "";
	    	}else{
	    		echo "";
	    	}
	    }
	    array_splice($arr,0,1);
    }
}
$conn->close();
?>