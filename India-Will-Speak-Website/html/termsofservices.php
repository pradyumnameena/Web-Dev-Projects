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
  <title>Terms of Services</title>
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

<div class="container" style="margin-top:50px">
  <br><br><br><br>
  <p>July 2, 2018</p><br>
  <h2 style="color:#079CF5;"><strong>INDIA WILL SPEAK TERMS OF SERVICE</strong></h2> 
  <p>Welcome to India Will Speak! Thank you for joining the debates on our site. We’re glad you’re here.</p>
  <p>These Terms of Service (“Terms”) apply to your use of India Will Speak’s website and services. Please read them carefully because by using India Will Speak, you agree to be bound by these Terms. If you’re using India Will Speak on behalf of an organization, you agree to these Terms on behalf of that organization.</p><br><br>
  
  <h3 style="color:#31AEF9">Content</h3>
  <p>You’ll find a couple of types of content on our service.</p>
  <p> <u>Your Content</u>. Your contributions to India Will Speak are yours and yours alone. By posting content to India Will Speak, you agree to give us a perpetual and irrevocable license to use, copy, display, distribute, and store your content. You also agree to freely license your published content to all India Will Speak users on the same terms. Your unpublished content will never be shown to anyone other than the India Will Speak users you authorize to see it.</p>
  <p>You’re solely responsible for the content you post to India Will Speak and assume all risks associated with it, including intellectual property or other legal claims. By posting content on India Will Speak, you represent that you have the necessary rights to that material, and that doing so doesn’t conflict with other agreements you’ve made.</p>
  <p>We don’t pre-screen anyone’s content, but we have the right—though no duty—to review and remove your contributions to India Will Speak. We assume no liability for content that you or others post on our service.</p>
  <p><u>India Will Speak’s Content and Brand Features</u>. India Will Speak is protected by copyright, trademark, and other laws.</p>
  <p>India Will Speak gives you a personal, worldwide, royalty-free, non-assignable, and non-exclusive license to use the software we provide you to use our service. This license is for the sole purpose of enabling you to use India Will Speak as permitted by these Terms. If you violate these Terms, we may terminate this license.</p>
  <p>You may not use any of India Will Speak’s trademarks, logos, domain names, or other distinctive brand features without our permission, except as otherwise permitted by law.</p><br>
  
  <h3 style="color:#31AEF9">Community Guidelines</h3>
  <p>We use your personal information to keep IndiaWillSpeak running, understand how you use our service, customize your experience, prevent abuse, provide customer support, and improve IndiaWillSpeak. We use your information internally only as needed to accomplish these goals.</p>
  <ul>
  	<li>Don’t use India Will Speak in a manner that violates any laws, regulations, ordinances, or directives.</li>
  	<li>Don’t use India Will Speak contrary to our policies.</li>
  	<li>Don’t use India Will Speak to do anything threatening, abusive, harassing, defamatory, tortious, obscene, profane, or invasive of another person’s privacy.</li>
  	<li>Don’t interfere with the proper functioning of any software, hardware, or equipment on India Will Speak.</li>
  	<li>Don’t engage in any conduct that inhibits anyone else’s use or enjoyment of India Will Speak, or which may harm India Will Speak or our users.</li>
  	<li>Don’t impersonate others on India Will Speak in a manner that is intended to or actually does confuse, deceive, or mislead other people.</li>
  </ul><br>
  
  <h3 style="color:#31AEF9">Crawling India Will Speak and Exporting Discussions</h3>
  <p>Crawling India Will Speak is allowed in accordance with our robots instructions, and you may use our export functionality to download debates for private use. Please don’t use other means to monitor or copy any material on India Will Speak, either manually or through automated means (<i>i.e.</i>, scraping), without prior written consent. If you’d like to request consent, please contact <a href="mailto:support@IndiaWillSpeak.com?Subject=Hello%20again" target="_top">support@IndiaWillSpeak.com</a></p><br>

  <h3 style="color:#31AEF9">Our Rights</h3>
  <p>We’re always working to improve India Will Speak and make our forum better, so we reserve some rights. We may change our services from time to time, and modify, suspend, or terminate user accounts that don’t comply with our terms. India Will Speak is not liable for any damages as a result of these actions.</p><br>

  <h3 style="color:#31AEF9">Other Sites and Services</h3>
  <p>India Will Speak contains links to websites and other services that we neither own nor control. We don’t endorse or assume responsibility for any third-party sites, information, materials, products, or services.</p><br>

  <h3 style="color:#31AEF9">Privacy</h3>
  <p>Our <a href="privacy.html">Privacy Policy</a> governs our collection and use of your personal information. Please review those provisions, too.</p><br>

  <h3 style="color:#31AEF9">Security</h3>
  <p>We take the security of India Will Speak very seriously. We work hard to protect your content and account, but we can’t absolutely guarantee that third parties won’t be able to defeat our security measures. Please let us know immediately if you discover any compromise or unauthorized use of your account.</p><br>

  <h3 style="color:#31AEF9">Children</h3>
  <p>India Will Speak is only for users 13 years old and older. If we learn a child under 13 is using our service, we’ll terminate the child’s account.</p><br>

  <h3 style="color:#31AEF9">Account Termination</h3>
  <p>You can disable your India Will Speak account at any time by sending an email to <a href="mailto:support@IndiaWillSpeak.com?Subject=Hello%20again" target="_top">support@IndiaWillSpeak.com</a> Will Speak.com. This means your user account will no longer be active on our service, and we will delete the personally identifiable information we have about you within 90 days.</p>
  <p>Content that you’ve contributed to India Will Speak discussions will remain available to the India Will Speak users you previously authorized to see it, even after you disable your account, though your identity as the author will be anonymized. Other users will still be able to view the profile associated with your account, but it will no longer contain personally identifiable information.</p><br>

  <h3 style="color:#31AEF9">Disclaimers</h3>
  <p>India Will Speak is provided “as is” without any warranties, express or implied.</p>
  <p><i>India Will Speak disclaims all warranties and conditions of merchantability, fitness for a particular purpose, and non-infringement.</i></p>
  <p>(Some states don’t allow these disclaimers, so this provision might not apply to you.)</p><br>

  <h3 style="color:#31AEF9">Limitation of Liability</h3>
  <p> <i>To the fullest extent allowed by law, India Will Speak shall not be liable for any indirect, incidental, special, consequential, or punitive damages, any loss of profits or revenues, or any loss of data, use, goodwill, or other intangible losses resulting from 
  <ol type="A">
    <li>your access to, use of, inability to access, or inability to use India Will Speak</li>
    <li>any third-party conduct or content on India Will Speak, including any defamatory, offensive, or illegal conduct of third parties</li>
    <li>any unauthorized access, use, or alteration of your content.</li>
  </ol></i> 
  </p>
  <p>(Some states don’t allow these limitations, so this provision might not apply to you.)</p><br>

  <h3 style="color:#31AEF9">Governing Law and Jurisdiction</h3>
  <p>These Terms will be governed by the laws of the Indian Constitution. </p>
  <p>For claims that aren’t subject to arbitration, we each agree to submit to the personal jurisdiction of a state court located in Haryana (Gurugram).</p><br>

  <h3 style="color:#31AEF9">Entire Agreement and Severability</h3>
  <p>The Terms, and the other materials incorporated by reference, constitute the full and entire agreement between you and India Will Speak. If any provision of these Terms is found to be unenforceable, the remaining provisions of these Terms will remain in full force and effect.</p><br>

  <h3 style="color:#31AEF9">No Waiver</h3>
  <p>No waiver of any provision of these Terms shall be a further or continuing waiver of that term. India Will Speak’s failure to assert any right or provision under these Terms does not constitute a waiver of that right or provision.</p><br>

  <h3 style="color:#31AEF9">Modification</h3>
  <p>The Terms may be modified from time to time. The date of the most recent revisions will always be at <a href="termsofservices.html">https://www.IndiaWillSpeak.com/terms</a>, and older versions will be archived at <a href="https://www.India Will Speak.com/terms/archive">https://www.IndiaWillSpeak.com/terms/archive</a>. If we make changes that we believe will substantially alter your rights, we will notify you in advance. You’ll agree to accept any changes or revisions to the Terms by continuing to use India Will Speak.</p><br>

  <h3 style="color:#31AEF9">Contact</h3>
  <p>We welcome all questions, concerns, and feedback you might have about these terms. If you have suggestions for us, let us know at <a href="mailto:support@IndiaWillSpeak.com?Subject=Hello%20again" target="_top">support@IndiaWillSpeak.com</a>.</p><br><br>





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
