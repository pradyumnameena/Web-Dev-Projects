<!DOCTYPE html>
<html>
<head>
    <title>Explore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b584b41d6d379001104aba5&product=inline-share-buttons"></script>
</head>
<body>
    <!--<div class="sharethis-inline-share-buttons"></div>-->
<div class="row">
    
    <div class="col-md-2" style="float:right;display:inline-block;">
      <!--<a href="#" style="vertical-align:middle;">Like</a><br>-->
      <!--<div class="iconbar" style="height:30vh;"></div>-->
      <div class="iconbar" style="height:40vh;">
          <div class="row">
              <div class="col-md-10">
                <button type="button" id="popysl" class="btn btn-outline-primary">Like</button>
              </div>
              <div id="modal-wrapperl" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="like.php">  
                    <div class="imgcontainer">
                        <span id="cpopysl" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Like Comment</h1>
                    </div>
                    <div class="container">
                      <input type="text" placeholder="Enter Unique ID" name="identity2">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              <div class="col-md-10">
                <button type="button" id="popysd" class="btn btn-outline-primary">Dislike</button>
              </div>
                <div id="modal-wrapperd" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="dislike.php">  
                    <div class="imgcontainer">
                        <span id="cpopysd" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Dislike Comment</h1>
                    </div>
                    <div class="container">
                      <input type="text" placeholder="Enter Unique ID" name="identity2">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              <div class="col-md-10">
                <button type="button" id="popysco" class="btn btn-outline-success">Comment</button>
              </div>
              
                <div id="modal-wrapperco" class="modal">
                 <form class="modal-content animate" name="confirm" method="post" action="comment.php">    
                   <div class="imgcontainer">
                       <span id="cpopysco" class="close" title="Close PopUp">&times;</span>
                     <h1 style="text-align:center">Add Comment</h1>
                   </div>
                   <div class="container">
                   <input type="text" placeholder="Enter Unique ID" name="identity">
                   <input type="text" placeholder="Enter 1 for favor and 0 for against" name="poc">
                   <input type="text" placeholder="Enter your comment" name="comment" rows="5">
                     <button type="submit">Submit</button>
                   </div> 
                 </form> 
                </div>
                
              <div class="col-md-10">
                <button type="button" id="popys" class="btn btn-outline-dark">Jump</button>
              </div>
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
              <div class="col-md-10">
                <button type="button" id="popysr" class="btn btn-outline-warning">Rate</button>
              </div>
              <div id="modal-wrapperr" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="rate.php">  
                    <div class="imgcontainer">
                        <span id="cpopysr" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Rate Comment</h1>
                    </div>
                    <div class="container">
                      <input type="text" placeholder="Enter Unique ID" name="identity">
                      <input type="text" placeholder="Rating" name="rating">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
              <div class="col-md-10">
                <button type="button" id="popysra" class="btn btn-outline-danger">Report</button>
              </div>
              <div id="modal-wrapperra" class="modal">
                    <form class="modal-content animate" name="confirm" method="post" action="report.php">  
                    <div class="imgcontainer">
                        <span id="cpopysra" class="close" title="Close PopUp">&times;</span>
                      <h1 style="text-align:center">Report</h1>
                    </div>
                    <div class="container">
                      <input type="text" placeholder="Enter Unique ID" name="identity">
                      <button type="submit">Submit</button>
                    </div>
                  </form>
                </div>
          </div>
      </div>
      <!--<div class="iconbar" style="width:100%;height:30vh;"></div>-->
    </div>
    
    <div class="col-md-10" style="height:100vh;overflow:scroll;float:left;">
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

$sql1 = "select * from dischead where identity='$identity' and priv=0";
$result1 = $conn->query($sql1);
$sql2 = "select * from discs where identity='$identity' and priv=0";
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
    // echo "<div class='well well-lg' style='text-align: center;'>";
    // echo "<br>";
    // echo "<div class='row'>";
        // echo "<div class='col-sm-4'>";
        // echo "<a class='btn btn-outline-dark' href='../html/comment.html' target='_blank' role='button'>Add Comment</a>";
        // echo "<button type='button' id='popysco1' class='btn btn-outline-dark'>Add Comment</button>";
        
                        // echo "<div id='modal-wrapperco1' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='comment.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //     //   echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //     echo "<input type='text' placeholder='Enter Unique ID' name='identity'>";
                        //     echo "<input type='text' placeholder='Enter 1 for favor and 0 for against' name='poc'>";
                        //     echo "<input type='text' placeholder='Enter your comment' name='comment' rows='5'>";
                        //     // echo "<textarea name='comment' rows='5' placeholder='Enter Unique ID'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
        
        // echo "</div>";
        // echo "<div class='col-sm-4'>";
        // echo "<button type='button' id='popys' class='btn btn-outline-dark'>Jump</button>";
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
        // echo "</div>";
        // echo "<div class='col-sm-4'>";
        // echo "<a class='btn btn-outline-dark' href='../html/report.html' target='_blank' role='button'>Report</a>";
        // echo "</div>";
    // echo "</div>";
    // echo "</div>";
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
                $proq = "select * from discs where parent='$identity' and priv=0";
                $presult = $conn->query($proq);
                while($prod=$presult->fetch_assoc()){
                    if($prod["poc"]=="pro"){
                        echo $prod["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $prod["identity"];
                        echo "<br>";
                        $thisid = $prod["identity"];
                        $ownuser = "select * from owner where identity='$thisid'";
                        $ownres = $conn->query($ownuser);
                        $own = $ownres->fetch_assoc();
                        echo "<p><small><em>";
                        $likeusr = "select * from discs where identity='$thisid'";
                        $likers = $conn->query($likeusr);
                        $likerw = $likers->fetch_assoc();
                        echo "<i class='fa fa-thumbs-o-up' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["likes"];
                        echo "&nbsp;";
                        echo "<i class='fa fa-thumbs-o-down' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["dislikes"];
                        echo "&nbsp;";
                        echo "&nbsp;";
                        echo "- ";
                        echo $own["owner"];
                         echo "</em></small>";
                        echo"</p>";
                        echo "<span class='glyphicon glyphicon-thumbs-up'></span>";
                        // echo "<div class='row'>";
                        // echo "<div class='col-sm-2'>";
                        //  echo "<a class='btn btn-outline-primary' href='../html/like.html' target='_blank' role='button'>Like It</a>";
                        //  echo "<button type='button' id='popysl' class='btn btn-outline-dark'>Like It</button>";
                        
                        // echo "<div id='modal-wrapperl' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='like.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                         
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-info' href='../html/dislike.html' target='_blank' role='button'>Dislike</a>";
                        // echo "<button type='button' id='popysd' class='btn btn-outline-dark'>Dislike</button>";
                        
                        
                        
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        
                         
                        
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-info' href='../html/rate.html' target='_blank' role='button'>Rate</a>";
                        // echo "<button type='button' id='popysr' class='btn btn-outline-info'>Rate</button>";
                        
                        
                        // echo "</div>";
                        // echo "</div>";
                        echo "<hr>";
                    }
                }
            echo "</div>";
            echo "<div class='col-sm-6'>";
                // here comes the cons
                $conq = "select * from discs where parent='$identity' and priv=0";
                $cresult = $conn->query($conq);
                while($cond=$cresult->fetch_assoc()){
                    if($cond["poc"]=="con"){
                        echo $cond["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $cond["identity"];
                        echo "<br>";
                        $thisid = $cond["identity"];
                        $ownuser = "select * from owner where identity='$thisid'";
                        $ownres = $conn->query($ownuser);
                        $own = $ownres->fetch_assoc();
                        echo "<p><small><em>";
                        $likeusr = "select * from discs where identity='$thisid'";
                        $likers = $conn->query($likeusr);
                        $likerw = $likers->fetch_assoc();
                        echo "<i class='fa fa-thumbs-o-up' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["likes"];
                        echo "&nbsp;";
                        echo "<i class='fa fa-thumbs-o-down' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["dislikes"];
                        echo "&nbsp;";
                        echo "&nbsp;";
                        echo "- ";
                        echo $own["owner"];
                         echo "</em></small>";
                        echo"</p>";
                         echo "<span class='glyphicon glyphicon-thumbs-up'></span>";
                        // echo "<div class='row'>";
                        // echo "<div class='col-sm-2'>";
                        //  echo "<a class='btn btn-outline-primary' href='../html/like.html' target='_blank' role='button'>Like It</a>";
                        //  echo "<button type='button' id='popysl' class='btn btn-outline-dark'>Like It</button>";
                        //  echo "<div id='modal-wrapperl' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='like.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                        
                        // echo "<div id='modal-wrapperl' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='like.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                        
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-info' href='../html/dislike.html' target='_blank' role='button'>Dislike</a>";
                        // echo "<button type='button' id='popysd' class='btn btn-outline-dark'>Dislike</button>";
                        // echo "<div id='modal-wrapperd' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='dislike.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                        
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        
                        
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-info' href='../html/rate.html' target='_blank' role='button'>Rate</a>";
                        // echo "<button type='button' id='popysr' class='btn btn-outline-info'>Rate</button>";
                        // echo "<div id='modal-wrapperr' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='rate.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //     //   echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //     echo "<input type='text' placeholder='Enter Unique ID' name='identity'>";
                        //       echo "<input type='text' placeholder='Rating' name='rating'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                        
                        // echo "</div>";
                        // echo "</div>";
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
	        $dadans = "select * from discs where identity = '$identity' and priv=0";
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
    // 			echo "<div class='well well-lg' style='text-align: center;'>";
    // echo "<br>";
    // echo "<div class='row'>";
        // echo "<div class='col-sm-4'>";
        // echo "<form action='../html/comment.html'>";
    				// 	echo "<input class='btn btn-outline-dark' type='submit' name='addc' target='_blank' value='Add Comment'>";
    				// 	echo "<button type='button' id='popysco1' class='btn btn-outline-dark'>Add Comment</button>";
    					
    				// 	echo "<div id='modal-wrapperco1' class='modal'>";
        //                   echo "<form class='modal-content animate' name='confirm' method='post' action='comment.php'>";    
        //                     echo "<div class='imgcontainer'>";
        //                       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
        //                     echo "</div>";
        //                     echo "<div class='container'>";
        //                     //   echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
        //                     echo "<input type='text' placeholder='Enter Unique ID' name='identity'>";
        //                     echo "<input type='text' placeholder='Enter 1 for favor and 0 for against' name='poc'>";
        //                     echo "<input type='text' placeholder='Enter your comment' name='comment' rows='5'>";
        //                     // echo "<textarea name='comment' rows='5' placeholder='Enter Unique ID'>";
        //                       echo "<button type='submit'>Submit</button>";
        //                     echo "</div>"; 
        //                   echo "</form>"; 
        //                 echo "</div>";
    					
    				// echo "</form>";
    				
    // 	echo "<div id='modal-wrapperco2' class='modal'>";
    //       echo "<form class='modal-content animate' name='confirm' method='post' action='rate.php'>";    
    //         echo "<div class='imgcontainer'>";
    //           echo "<h1 style='text-align:center'>Explore Discussion</h1>";
    //         echo "</div>";
    //         echo "<div class='container'>";
    //         //   echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
    //         echo "<input type='text' placeholder='Enter Unique ID' name='identity'>";
    //           echo "<input type='text' placeholder='Rating' name='rating'>";
    //           echo "<button type='submit'>Submit</button>";
    //         echo "</div>"; 
    //       echo "</form>"; 
    //     echo "</div>";
    				
        // echo "</div>";
        // echo "<div class='col-sm-4'>";
        // echo "<form action='../html/explore.html'>";
    				// 	echo "<input class='btn btn-outline-dark' type='submit' name='addc' target='_blank' value='Jump'>";
    				// echo "<button type='button' id='popys' class='btn btn-outline-dark'>Jump</button>";
    				// echo "</form>";
    				// echo "<div id='modal-wrapper' class='modal'>";
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
        // echo "</div>";
        // echo "<div class='col-sm-4'>";
        // echo "<form action='../html/report.html'>";
    				// 	echo "<input class='btn btn-outline-dark' type='submit' name='addc' target='_blank' value='Report'>";
    				// echo "</form>";
        // echo "</div>";
    // echo "</div>";
    // echo "</div>";
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
                $proq = "select * from discs where parent='$identity' and priv=0";
                $presult = $conn->query($proq);
                while($prod=$presult->fetch_assoc()){
                    if($prod["poc"]=="pro"){
                        echo $prod["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $prod["identity"];
                        echo "<br>";
                        $thisid = $prod["identity"];
                        $ownuser = "select * from owner where identity='$thisid'";
                        $ownres = $conn->query($ownuser);
                        $own = $ownres->fetch_assoc();
                        echo "<p><small><em>";
                        $likeusr = "select * from discs where identity='$thisid'";
                        $likers = $conn->query($likeusr);
                        $likerw = $likers->fetch_assoc();
                        echo "<i class='fa fa-thumbs-o-up' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["likes"];
                        echo "&nbsp;";
                        echo "<i class='fa fa-thumbs-o-down' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["dislikes"];
                        echo "&nbsp;";
                        echo "&nbsp;";
                        echo "- ";
                        echo $own["owner"];
                         echo "</em></small>";
                        echo"</p>";
                        // echo "<br>";
                         echo "<span class='glyphicon glyphicon-thumbs-up'></span>";
                        // echo "<div class='row'>";
                        // echo "<div class='col-sm-2'>";
                        // //  echo "<a class='btn btn-outline-primary' href='../html/like.html' target='_blank' role='button'>Like It</a>";
                        //  echo "<button type='button' id='popysl' class='btn btn-outline-dark'>Like It</button>";
                        // //  echo "<div id='modal-wrapperl' class='modal'>";
                        // //   echo "<form class='modal-content animate' name='confirm' method='post' action='like.php'>";    
                        // //     echo "<div class='imgcontainer'>";
                        // //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        // //     echo "</div>";
                        // //     echo "<div class='container'>";
                        // //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        // //       echo "<button type='submit'>Submit</button>";
                        // //     echo "</div>"; 
                        // //   echo "</form>"; 
                        // // echo "</div>";
                         
                        // echo "<div id='modal-wrapperl' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='like.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>"; 
                         
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // // echo "<a class='btn btn-outline-info' href='../html/dislike.html' target='_blank' role='button'>Dislike</a>";
                        // echo "<button type='button' id='popysd' class='btn btn-outline-dark'>Dislike</button>";
                        // // echo "<div id='modal-wrapperd' class='modal'>";
                        // //   echo "<form class='modal-content animate' name='confirm' method='post' action='dislike.php'>";    
                        // //     echo "<div class='imgcontainer'>";
                        // //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        // //     echo "</div>";
                        // //     echo "<div class='container'>";
                        // //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        // //       echo "<button type='submit'>Submit</button>";
                        // //     echo "</div>"; 
                        // //   echo "</form>"; 
                        // // echo "</div>";
                        
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // // echo "<a class='btn btn-outline-info' href='../html/rate.html' target='_blank' role='button'>Rate</a>";
                        // echo "<button type='button' id='popysr' class='btn btn-outline-info'>Rate</button>";
                        // // echo "<div id='modal-wrapperr' class='modal'>";
                        // //   echo "<form class='modal-content animate' name='confirm' method='post' action='rate.php'>";    
                        // //     echo "<div class='imgcontainer'>";
                        // //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        // //     echo "</div>";
                        // //     echo "<div class='container'>";
                        // //     //   echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        // //     echo "<input type='text' placeholder='Enter Unique ID' name='identity'>";
                        // //       echo "<input type='text' placeholder='Rating' name='rating'>";
                        // //       echo "<button type='submit'>Submit</button>";
                        // //     echo "</div>"; 
                        // //   echo "</form>"; 
                        // // echo "</div>";
                        
                        // echo "</div>";
                        // echo "</div>";
                        echo "<hr>";
                    }
                }
            echo "</div>";
            echo "<div class='col-sm-6'>";
                // here comes the cons
                $conq = "select * from discs where parent='$identity' and priv=0";
                $cresult = $conn->query($conq);
                while($cond=$cresult->fetch_assoc()){
                    if($cond["poc"]=="con"){
                        echo $cond["heading"];
                        echo "<br>";
                        echo "Unique ID is ";
                        echo $cond["identity"];
                        echo "<br>";
                        $thisid = $cond["identity"];
                        $ownuser = "select * from owner where identity='$thisid'";
                        $ownres = $conn->query($ownuser);
                        $own = $ownres->fetch_assoc();
                        echo "<p><small><em>";
                        $likeusr = "select * from discs where identity='$thisid'";
                        $likers = $conn->query($likeusr);
                        $likerw = $likers->fetch_assoc();
                        echo "<i class='fa fa-thumbs-o-up' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["likes"];
                        echo "&nbsp;";
                        echo "<i class='fa fa-thumbs-o-down' aria-hidden='true'></i>";
                        echo "&nbsp;";
                        echo $likerw["dislikes"];
                        echo "&nbsp;";
                        echo "&nbsp;";
                        echo "- ";
                        echo $own["owner"];
                         echo "</em></small>";
                        echo"</p>";
                        // echo "<br>";
                        // echo "<div class='row'>";
                        // echo "<div class='col-sm-2'>";
                        //  echo "<a class='btn btn-outline-primary' href='../html/like.html' target='_blank' role='button'>Like It</a>";
                        //  echo "<button type='button' id='popysl' class='btn btn-outline-dark'>Like It</button>";
                        //  echo "<div id='modal-wrapperl' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='like.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                        
                        // echo "<div id='modal-wrapperl' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='like.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                         
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-info' href='../html/dislike.html' target='_blank' role='button'>Dislike</a>";
                        // echo "<button type='button' id='popysd' class='btn btn-outline-dark'>Dislike</button>";
                        // echo "<div id='modal-wrapperd' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='dislike.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity2'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                        
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-warning' href='../html/report.html' target='_blank' role='button'>Report</a>";
                        // echo "</div>";
                        // echo "<div class='col-sm-2'>";
                        // echo "<a class='btn btn-outline-info' href='../html/rate.html' target='_blank' role='button'>Rate</a>";
                        // echo "<button type='button' id='popysr' class='btn btn-outline-info'>Rate</button>";
                        // echo "<div id='modal-wrapperr' class='modal'>";
                        //   echo "<form class='modal-content animate' name='confirm' method='post' action='rate.php'>";    
                        //     echo "<div class='imgcontainer'>";
                        //       echo "<h1 style='text-align:center'>Explore Discussion</h1>";
                        //     echo "</div>";
                        //     echo "<div class='container'>";
                        //       echo "<input type='text' placeholder='Enter Unique ID' name='identity'>";
                        //       echo "<input type='text' placeholder='Rating' name='rating'>";
                        //       echo "<button type='submit'>Submit</button>";
                        //     echo "</div>"; 
                        //   echo "</form>"; 
                        // echo "</div>";
                        
                        // echo "</div>";
                        // echo "</div>";
                        echo "<hr>";
                    }
                }
            echo "</div>";
        echo "</div>";
        
        
        
        
}else{
    // echo '<script type="text/javascript">nf();</script>';
    include 'invalidid.php';
    exit();
}
?>
    </div>
    
</div>
<script>
var disp = document.getElementById("modal-wrapper");
document.getElementById("popys").onclick = function () {
    disp.style.display = "block";
};

var disp2 = document.getElementById("modal-wrapper");
document.getElementById("cpopys").onclick = function () {
    disp2.style.display = "none";
};

var dispco = document.getElementById("modal-wrapperco");
document.getElementById("popysco").onclick = function () {
    dispco.style.display = "block";
};

var dispco2 = document.getElementById("modal-wrapperco");
document.getElementById("cpopysco").onclick = function () {
    dispco2.style.display = "none";
};

var displ = document.getElementById("modal-wrapperl");
document.getElementById("popysl").onclick = function () {
    displ.style.display = "block";
};

var displ2 = document.getElementById("modal-wrapperl");
document.getElementById("cpopysl").onclick = function () {
    displ.style.display = "none";
};
    
var dispd = document.getElementById("modal-wrapperd");
document.getElementById("popysd").onclick = function () {
    dispd.style.display = "block";
};

var dispd2 = document.getElementById("modal-wrapperd");
document.getElementById("cpopysd").onclick = function () {
    dispd2.style.display = "none";
};

var dispr = document.getElementById("modal-wrapperr");
document.getElementById("popysr").onclick = function () {
    dispr.style.display = "block";
};

var dispr2 = document.getElementById("modal-wrapperr");
document.getElementById("cpopysr").onclick = function () {
    dispr2.style.display = "none";
};

var dispra = document.getElementById("modal-wrapperra");
document.getElementById("popysra").onclick = function () {
    dispra.style.display = "block";
};

var dispra2 = document.getElementById("modal-wrapperra");
document.getElementById("cpopysra").onclick = function () {
    dispra2.style.display = "none";
};
</script>


</body>
</html>