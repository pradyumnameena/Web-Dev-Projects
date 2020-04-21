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
  <link rel="shortcut icon" href="images/fav.png" type="image/png">
  <link rel="stylesheet" href="css/css2/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/css2/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/js2/bootstrap.min.js"></script>
  <style>
      #spl{
          position:relative;
          padding:0px;
          width:100%;
          height:80vh;
      }
     .img{
         width:100%;
         height:100%;
     }
     #spl2 {
    position: absolute;
    bottom: 20px;
    right: 320px;
    /*background-color: black;*/
    color: white;
    padding-left: 20px;
    padding-right: 20px;
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
        <li><a href="index.php">Home</a></li>
        <li><a href="html/tour.php">Tour</a></li>
        <li><a href="html/collab.php">Collaborations</a></li>
        <li><a href="html/search.html">Search</a></li>
      </ul>
    <!--  <form class="navbar-form navbar-left" action="php/search.php">-->
    <!--  <div class="input-group">-->
    <!--    <input type="text" class="form-control" placeholder="Search" name="search">-->
    <!--  </div>-->
    <!--</form>-->
    <ul class="nav navbar-nav navbar-right">
              <li><a href="html/login.html">Login</a></li>
              <li><a href="html/signup.html">Sign Up</a></li>
          </ul>
    </div>
  </div>
</nav>
<!--<div class="jumbotron" id="spl">-->
<!--    <p class='lead' style="text-align:center;">Debate for good</p>-->
<!--    <img src="images/mainbg.jpg" class="img">-->
<!--</div>-->
<div class='jumbotron'>
    <p class="h1" style="text-align:center">Debate for good</p>
    <blockquote class="blockquote text-center">
  <p class="mb-0"><p class="lead">It is the mark of an educated man to be able to entertain a thought without accepting it.</p>
  <footer class="blockquote-footer"><cite title="Source Title">Aristotle</cite></footer></p>
</blockquote>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
<p class="h2" style="text-align:center;">Discuss</p>
<blockquote class="blockquote text-center">
  <p style="color:rgb(67,142,255);">India will speak empowers you to discuss and debate about the causes which are close to your heart. We empower you to see the other side and get a holistic point of view regarding different topics.</p>
</blockquote>
</div>
<div class="col-md-4">
    <img src="images/f_discuss.png" class="central">
</div>
</div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
    <img src="images/f_debate.png" class="central">
</div>
        <div class="col-md-8">
  <p class="h2" style="text-align:center;">Debate</p>
<blockquote class="blockquote text-center">
  <p style="color:rgb(67,142,255);">We promote “Contest, Controvert & Concern”. Contest for believes and opinions, Controvert what you believe in and get Concerned about what really is true.</p>
</blockquote>
</div>

</div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8">
  <p class="h2" style="text-align:center;">Decide</p>
<blockquote class="blockquote text-center">
  <p style="color:rgb(67,142,255);">Engagement through debate promotes decision after consideration. It helps in creation of an open society and promotes liberal values for a democratic future.</p>
</blockquote>
</div>
<div class="col-md-4">
    <img src="images/f_decide.png" class="central">
</div>
<br>
</div>
</div>
<section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="html/aboutus.php"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="html/feedback.html"><i class="fa fa-angle-double-right"></i>Feedback</a></li>
                        <li><a href="html/privacy.php"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                        <li><a href="html/termsofservices.php"><i class="fa fa-angle-double-right"></i>Terms of Services</a></li>
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
                    <p class="h5" style="color: rgb(120,120,120)">Developed and Maintained by <span style="color: white"><a href = "pradysoon.html" title="Hello World!" target="_blank" style="text-decoration: none; color:white">Pradyumna Meena</a></span> and <span style="color: white">Brajmohan Meena</span></p>
                </div>
                </hr>
            </div>  
        </div>
    </section>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 1500); // Change image every 3 seconds
}
</script>
</body>
</html>
