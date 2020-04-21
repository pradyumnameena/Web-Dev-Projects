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
  <title>Privacy Policy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/fav.png" type="image/png">
  <link rel="stylesheet" href="../css/css2/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/css2/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/js2/bootstrap.min.js"></script>
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
        <li><a href="../index2.php">Home</a></li>
        <li><a href="tour2.php">Tour</a></li>
        <li><a href="collab2.php">Collaborations</a></li>
        <li><a href="search.html">Search</a></li>
      </ul>
    <!--  <form class="navbar-form navbar-left" action="php/search.php">-->
    <!--  <div class="input-group">-->
    <!--    <input type="text" class="form-control" placeholder="Search" name="search">-->
    <!--  </div>-->
    <!--</form>-->
    <ul class="nav navbar-nav navbar-right">
    <li><a href="../php/user.php">My Home</a></li>
    <!--          <li><a href="login.html">Login</a></li>-->
    <!--          <li><a href="signup.html">Sign Up</a></li>-->
          </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:50px">
  <br><br><br><br>
  <p>July 2, 2018</p><br>
  <h2 style="color:#079CF5;"><strong>INDIA WILL SPEAK PRIVACY POLICY</strong></h2> 
  <p>Please read this privacy policy carefully. It applies to all interactions you have with IndiaWillSpeak’s web services and apps..</p><br><br>
  
  <h3 style="color:#31AEF9">The Information We Collect</h3>
  <p> <u>Account Information</u>. When you create an account with IndiaWillSpeak, we ask you to choose a username and password. We also ask for your email address. You may also choose to provide additional profile information such as a photo, your real name, a short bio, and links to social media accounts.</p>
  <p> <u>Information About Your Use of IndiaWillSpeak</u>. We receive some information automatically when you use IndiaWillSpeak. This includes data about your device, software, the operating system you use when accessing IndiaWillSpeak, your Internet Protocol address, the date and time of each request you make to IndiaWillSpeak, file types transferred (e.g., photos), and number and size of files transferred.</p>
  <p><u>Customer Service</u>. If you file a support ticket, we’ll collect any other personal information you choose to provide us.</p>
  <p><u>Information About People You Invite to Join a Team or Discussion</u>. When you invite your friends and colleagues to join a team or discussion on IndiaWillSpeak, we’ll store the email addresses you provide in order to authenticate those users.</p><br>
  
  <h3 style="color:#31AEF9">How We Use Your Information</h3>
  <p>We use your personal information to keep IndiaWillSpeak running, understand how you use our service, customize your experience, prevent abuse, provide customer support, and improve IndiaWillSpeak. We use your information internally only as needed to accomplish these goals.</p><br>
  
  <h3 style="color:#31AEF9">How We Disclose Your Information</h3>
  <p>We will share your personally identifiable information only in the limited circumstances below. IndiaWillSpeak does not sell your information or share it with third-party advertisers.</p><br>
  <p><u>With your permission</u>. We may share your information with your consent, after letting you know what information will be shared and with whom.</p>
  <p><u>In response to the law</u>. We may disclose your information if we believe it is reasonably necessary to comply with a law, regulation, or valid legal process. If we are going to release your information, our policy is to provide you with notice unless we are prohibited from doing so by law or court order. We may disclose your information without providing you with prior notice if we believe it’s necessary to prevent imminent and serious bodily harm to a person. Nothing in this policy is intended to limit any legal objections or defenses you might have to demands to compel disclosure of your information, including demands from the government.</p>
  <p><u>With third parties helping us provide IndiaWillSpeak</u>. We may share your information with third-party services helping us provide and improve our products. Those third parties access and use your information only on our behalf. The third-party services we use to provide IndiaWillSpeak includes Amazon AWS, Zendesk. Please note that this Privacy Policy explains IndiaWillSpeak’s practices only, and doesn’t extend to the practices of other services. Take a look at those companies’ privacy policies to learn more about their data practices.</p>
  <p><u>With other users</u>. IndiaWillSpeak may display your profile information to other people. We also show public discussions in which you’ve been active by default, but you can choose to hide this timeline</p>
  <p><u>Sale or merger</u>. If all or part of IndiaWillSpeak is sold, merged, or otherwise transferred to another company in the future, your information may be transferred as part of that transaction. If that happens, IndiaWillSpeak will take reasonable steps to make sure your information continues to be treated consistently with this privacy policy.</p><br>
  <p>We may also disclose aggregate, non-identifying information about how our users use IndiaWillSpeak.</p><br>

  <h3 style="color:#31AEF9">Web Tracking Policy</h3>
  <p><u>Cookies</u>. We use cookies, which are text files placed on your computer, to identify whether you have logged in and recognize that your web browser has accessed our servers before.</p>
  <p>Most browsers have an option for disabling cookies, but if you disable them you will not be able to log into your IndiaWillSpeak account.</p>
  <p>Some third-party services that we use may place their own identifiers in your browser. This Privacy Policy covers our use of cookies only and not the use of cookies by third parties.</p>
  <p><u>Local Storage</u>. Local storage provides similar functionality to cookies, but its contents are kept on your device and not transmitted across the Internet, like cookies are. As with cookies, we use local storage technologies to collect and store information (including personal information) to identify whether you have logged in and recognize that you have accessed IndiaWillSpeak before.</p>
  <p><u>Do Not Track</u>. Some browsers make it possible for you to signal that you don’t want your Internet browsing activity to be tracked. The Internet community hasn’t reached a consensus on how to best honor these signals, so IndiaWillSpeak doesn’t respond to Do Not Track requests at this time.</p>
  <p><u>Email</u>. To measure the deliverability of our emails to users, we may embed information in them, such as a web beacon or tag.</p>
  <p><u>A special note about Google Analytics</u>. This website uses Google Analytics, a web analytics service provided by Google, Inc. Google Analytics uses cookies to help the website analyze how users use the site. The information generated by the cookie about your use of the website will be transmitted to and stored by Google on servers in the United States.</p>
  <p>In case IP anonymisation is activated on this website, your IP address will be truncated within the area of Member States of the European Union or other parties to the Agreement on the European Economic Area. Only in exceptional cases the whole IP address will be first transferred to a Google server in the USA and truncated there. IP anonymisation is active on this website.</p>
  <p>Google will use this information on behalf of the operator of this website for the purpose of evaluating your use of the website, compiling reports on website activity for website operators and providing them other services relating to website activity and internet usage.</p>
  <p>The IP address that your browser conveys within the scope of Google Analytics will not be associated with any other data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser. However, please note that if you do this you may not be able to use the full functionality of this website. You can also opt out of being tracked by Google Analytics with effect for the future by downloading and installing the <a href="https://tools.google.com/dlpage/gaoptout?hl=en">Google Analytics opt-out browser add-on</a> for your current web browser.</p><br>

  <h3 style="color:#31AEF9">Data Security</h3>
  <p>IndiaWillSpeak is designed to have several layers of security<br>
  <ul>
    <li>We use Secure Sockets Layer (SSL)/Transport Layer Security (TLS) to create a secure tunnel to protect data in transit between your device and IndiaWillSpeak’s servers.</li>
    <li>We don’t retain your actual account password, but hash and salt it to help protect it against possible compromise.</li>
    <li>We narrowly limit the number of IndiaWillSpeak employees who have access to user data through policy and technical access controls.</li>
  </ul>
  </p>
  <p>No transmission over the internet is completely secure, so we can’t absolutely guarantee that unauthorized parties won’t be able to defeat our security measures. You use IndiaWillSpeak at your own risk, and are responsible for taking reasonable measures to secure your account (such as choosing a strong, unique password and keeping it secret).</p>
  <p>We are always on the lookout for vulnerabilities in IndiaWillSpeak. If you discover a vulnerability in our service, we would be grateful for your report and encourage you to let us know immediately. If you give us reasonable time to respond to your report before making any information public, and make a good faith effort to avoid privacy violations, destruction of data, and interruption or degradation of our service during your research, we will not pursue any legal action against you or ask law enforcement to investigate your actions.</p>
  <p>To report a vulnerability, please email <a href="mailto:security@IndiaWillSpeak.com?Subject=Hello%20again" target="_top">security@IndiaWillSpeak.com</a>.</p><br>

  <h3 style="color:#31AEF9">Access, Correction and Deletion of Information</h3>
  <p>If you would like to request access, correction, or deletion of personal information IndiaWillSpeak maintains about you, please email <a href="mailto:support@IndiaWillSpeak.com?Subject=Hello%20again" target="_top">support@IndiaWillSpeak.com</a>.</p><br>

  <h3 style="color:#31AEF9">Changes to This Policy</h3>
  <p>We may revise this Privacy Policy from time to time. The most current version of the policy will govern our use of your information and will always be at <a href="privacy.html">https://www.IndiaWillSpeak.com/privacy</a>. Older versions of the policy will be archived at <a href="https://www.IndiaWillSpeak.com/privacy/archive">https://www.IndiaWillSpeak.com/privacy/archive</a>. If we make changes that we believe will substantially alter your rights, we will notify you in advance.</p><br>

  <h3 style="color:#31AEF9">Contact</h3>
  <p>We would love to hear from you. IndiaWillSpeak welcomes questions, concerns, and feedback about this policy. If you have suggestions for us, let us know at <a href="mailto:privacy@IndiaWillSpeak.com?Subject=Hello%20again" target="_top">privacy@IndiaWillSpeak.com</a>.</p><br><br>


</div>



<section id="footer">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <ul class="list-unstyled quick-links">
                        <li><a href="../index2.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="aboutus2.php"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="feedback.html"><i class="fa fa-angle-double-right"></i>Feedback</a></li>
                        <li><a href="privacy2.php"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
                        <li><a href="termsofservices2.php"><i class="fa fa-angle-double-right"></i>Terms of Services</a></li>
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
