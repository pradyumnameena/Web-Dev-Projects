<script type="text/javascript">
    function inf(){
        alert("Image not selected.");
    }
    function nai(){
        alert("Please upload a image.");
    }
    function ae(){
        alert("Please choose a different file name. File with the same name already exists.");
    }
    function tl(){
        alert("Size of the file is too large.");
    }
    function formt(){
        alert("Only jpg , jpeg and png formats are allowed.");
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
if(isset($_POST['comment']) && isset($_POST['comment1']) && isset($_POST['first']) && isset($_POST['second']) && isset($_POST['third'])){
    
$message = $_POST['comment'];
$message1 = $_POST['comment1'];
$first = $_POST['first'];
$sec = $_POST['second'];
$third = $_POST['third'];
$name = md5($message);
$start = strtotime("29 June 2018");
$diff = strtotime("now")-$start;
$user = $_COOKIE["type"];
$user2 = md5($user);
$val = uniqid();

$fname=md5($message);
$target_dir = "../headimg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$vr = "a";

if(is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
    }else{
        echo '<script type="text/javascript">nai();</script>';
        exit();
    }

    if (file_exists($target_file)) {
        echo '<script type="text/javascript">ae();</script>';
        exit();
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo '<script type="text/javascript">tl();</script>';
        exit();
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo '<script type="text/javascript">formt();</script>';
        exit();
    }
    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "";
    }
    $vr = "../headimg/".basename( $_FILES["fileToUpload"]["name"]);
    // exit();
}else{
    echo '<script type="text/javascript">inf();</script>';
    exit();
}
$sql = "INSERT INTO dischead (heading,count,timeline,identity,likes,dislikes,tag1,tag2,tag3,imagelink) 
						VALUES ('$message',0,'$diff','$val',0,0,'$first','$sec','$third','$vr')";
$sql3 = "insert into modals (heading,subhead1,identity) values('$message','$message1','$val')";

if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql3) === TRUE) {
    echo "";
} else {
    echo "Error creating table: " . $conn->error;
}
// updating in topics table
if($first=="Hindu" || $first=="hindu"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Religion" || $first=="religion"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Terrorism" || $first=="terrorism"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Populism" || $first=="populism"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Fascism" || $first=="fascism"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Democracy" || $first=="democracy"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Politics" || $first=="politics"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Islam" || $first=="islam"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Religious Politics" || $first=="religious politics"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Hinduism" || $first=="hinduism"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Journalism" || $first=="journalism"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="USA" || $first=="usa"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="India" || $first=="india"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Trump" || $first=="trump"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Modi" || $first=="modi"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Economy" || $first=="economy"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Finance" || $first=="finance"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Business" || $first=="business"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="World" || $first=="world"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="World Economy" || $first=="world economy"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Media" || $first=="media"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Politician" || $first=="politician"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Trade" || $first=="trade"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Advocacy" || $first=="advocacy"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Social Issue" || $first=="social issue"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Social Awareness" || $first=="social awareness"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Entrepreneurship" || $first=="entrepreneurship"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Entrepreneurs" || $first=="entrepreneurs"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Innovation" || $first=="innovation"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="States" || $first=="states"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Marketing" || $first=="marketing"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Advertising" || $first=="advertising"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($first=="Drugs and Narcotics" || $first=="drugs and narcotics"){
    $f11 = "select * from topics where head='$first'";
    $fr1 = $conn->query($f11);
    $fs1 = $fr1->fetch_assoc();
    $fu1 = $fs1["count"]+1;
    $f12 = "update topics set count='$fu1' where head='$first'";
    if($conn->query($f12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else{
    
}

if($sec=="Hindu" || $sec=="hindu"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Religion" || $sec=="religion"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Terrorism" || $sec=="terrorism"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Populism" || $sec=="populism"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Fascism" || $sec=="fascism"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Democracy" || $sec=="democracy"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Politics" || $sec=="politics"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Islam" || $sec=="islam"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Religious Politics" || $sec=="religious politics"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Hinduism" || $sec=="hinduism"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Journalism" || $sec=="journalism"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="USA" || $sec=="usa"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="India" || $sec=="india"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Trump" || $sec=="trump"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Modi" || $sec=="modi"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Economy" || $sec=="economy"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Finance" || $sec=="finance"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Business" || $sec=="business"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="World" || $sec=="world"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="World Economy" || $sec=="world economy"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Media" || $sec=="media"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Politician" || $sec=="politician"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Trade" || $sec=="trade"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Advocacy" || $sec=="advocacy"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Social Issue" || $sec=="social issue"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Social Awareness" || $sec=="social awareness"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Entrepreneurship" || $sec=="entrepreneurship"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Entrepreneurs" || $sec=="entrepreneurs"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Innovation" || $sec=="innovation"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="States" || $sec=="states"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Marketing" || $sec=="marketing"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Advertising" || $sec=="advertising"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($sec=="Drugs and Narcotics" || $sec=="drugs and narcotics"){
    $s11 = "select * from topics where head='$sec'";
    $sr1 = $conn->query($s11);
    $ss1 = $sr1->fetch_assoc();
    $su1 = $ss1["count"]+1;
    $s12 = "update topics set count='$su1' where head='$sec'";
    if($conn->query($s12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else{
    
}

if($third=="Hindu" || $third=="hindu"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Religion" || $third=="religion"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Terrorism" || $third=="terrorism"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Populism" || $third=="populism"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Fascism" || $third=="fascism"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Democracy" || $third=="democracy"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Politics" || $third=="politics"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Islam" || $third=="islam"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Religious Politics" || $third=="religious politics"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Hinduism" || $third=="hinduism"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Journalism" || $third=="journalism"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="USA" || $third=="usa"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="India" || $third=="india"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Trump" || $third=="trump"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Modi" || $third=="modi"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Economy" || $third=="economy"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Finance" || $third=="finance"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Business" || $third=="business"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="World" || $third=="world"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="World Economy" || $third=="world economy"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Media" || $third=="media"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Politician" || $third=="politician"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Trade" || $third=="trade"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Advocacy" || $third=="advocacy"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Social Issue" || $third=="social issue"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Social Awareness" || $third=="social awareness"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Entrepreneurship" || $third=="entrepreneurship"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Entrepreneurs" || $third=="entrepreneurs"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Innovation" || $third=="innovation"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="States" || $third=="states"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Marketing" || $third=="marketing"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Advertising" || $third=="advertising"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else if($third=="Drugs and Narcotics" || $third=="drugs and narcotics"){
    $t11 = "select * from topics where head='$third'";
    $tr1 = $conn->query($t11);
    $ts1 = $tr1->fetch_assoc();
    $tu1 = $ts1["count"]+1;
    $t12 = "update topics set count='$tu1' where head='$third'";
    if($conn->query($t12)===TRUE){
        echo "";
    }else{
        echo "";
    }
}else{
    
}

$sql2 = "insert into ".$user2." (datatype , owner , partner,identity,following,rating) values ('disc',1,0,'$val',0,0)";

if ($conn->query($sql2) === TRUE) {
    echo "";
} else {
    echo "Error creating table: " . $conn->error;
}
// owner waali table mein entry krna hai
$fin = "insert into owner (identity,owner) values ('$val','$user')";
if($conn->query($fin)===TRUE){
    echo "";
}else{
    echo "";
}

$conn->close();
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
        <h1>Your discussion has been created.</h1>
        <a href="user.php" class="btn btn-primary">Home</a>
      </div>
    </div>
    </body>
    </html>