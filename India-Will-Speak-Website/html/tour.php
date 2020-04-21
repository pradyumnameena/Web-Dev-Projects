<?php 
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "select * from topics order by count DESC";
$result=$conn->query($sql);
$topics=array("yo");
$links=array("yo");
while($row=$result->fetch_assoc()){
    array_push($topics,$row["head"]);
    array_push($links,$row["link"]);
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>India Will Speak!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/fav.png" type="image/png">
  <link rel="stylesheet" href="../css/css2/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/css2/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/js2/bootstrap.min.js"></script>
  <style>
      img.central{
          margin-left:auto;
          margin-right:auto;
          vertical-align: middle;
      }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">India Will Speak</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="tour.php">Tour</a></li>
        <li><a href="collab.php">Collaborations</a></li>
        <li><a href="search.html">Search</a></li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
              <li><a href="login.html">Login</a></li>
              <li><a href="signup.html">Sign Up</a></li>
          </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-8">
                <h2 style="color:rgb(67,142,255);">Create your debate and polls</h2>
        <p class="lead">IWS allows you to create your own debate and polls. Just write your topic and give a little bit of context to it and you are ready to march on.</p>
            </div>
            <div class="col-md-4">
                <img src="../images/f_create.png" class="central">
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <img src="../images/f_rate.png" class="central">
            </div>
            <div class="col-md-8">
                <h2 style="color:rgb(67,142,255);">Rate Arguments</h2>
        <p class="lead">A debate is not about dividing the screen into ten parts and whoever could shout the loudest win. Here it is about logic and reason. So, users get to decide which the best argument is and they rate it accordingly.</p>
            </div>
        </div>
        
    </div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-8">
                <h2 style="color:rgb(67,142,255);">Visualize debates</h2>
        <p class="lead">IWS allows you to visualize your discussions as an interactive tree of pros and cons. By dividing the argument into categories we present to you an uncluttered version of arguments.</p>
            </div>
            <div class="col-md-4">
                <img src="../images/f_visual.png" class="central">
            </div>
        </div>
    </div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4">
                <img src="../images/f_see.png" class="central">
            </div>
            <div class="col-md-8">
                <h2 style="color:rgb(67,142,255);">See the other side</h2>
        <p class="lead">IWS strives to create a platform where you learn about what the other side thinks. It gives you an opportunity to understand multiple perspectives and select the best among them for your own good.</p>
            </div>
            
        </div>
    </div>
</div>
<section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="../index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="aboutus.php"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="feedback.html"><i class="fa fa-angle-double-right"></i>Feedback</a></li>
                        <li><a href="privacy.php"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                        <li><a href="termsofservices.php"><i class="fa fa-angle-double-right"></i>Terms of Services</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <ul class="list-unstyled quick-links">
                        <li><a href=<?php echo $links[1];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[1];?></a></li>
                        <li><a href=<?php echo $links[2];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[2];?></a></li>
                        <li><a href=<?php echo $links[3];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[3];?></a></li>
                        <li><a href=<?php echo $links[4];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[4];?></a></li>
                        <li><a href=<?php echo $links[5];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[5];?></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href=<?php echo $links[6];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[6];?></a></li>
                        <li><a href=<?php echo $links[7];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[7];?></a></li>
                        <li><a href=<?php echo $links[8];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[8];?></a></li>
                        <li><a href=<?php echo $links[9];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[9];?></a></li>
                        <li><a href=<?php echo $links[10];?>><i class="fa fa-angle-double-right"></i><?php echo $topics[10];?></a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://facebook.com/indiawillspeaknow" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/will_speak" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/indiawillspeak/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://plus.google.com/u/3/103257441446619323913" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div> 

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h5" style="color: rgb(120,120,120)">&copy All right Reversed.</p>
                    <p class="h5" style="color: rgb(120,120,120)">Developed and Maintained by <span style="color: white"><a href = "../pradysoon.html" title="Hello World!" target="_blank" style="text-decoration: none; color:white">Pradyumna Meena</a></span> and <span style="color: white">Brajmohan Meena</span></p>
                </div>
                </hr>
            </div>  
        </div>
    </section>
</body>
</html>
