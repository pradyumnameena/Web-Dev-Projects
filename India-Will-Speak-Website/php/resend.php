<script>
    function f1(){
        alert("You need to sign up first.");
    }
    function f2(){
        alert("Your account has been banned. Please use a different email-id to continue.");
    }
    function f3(){
        alert("Your account is already activated.");
    }
    function f4(){
        alert("You need to sign up again.");
    }
</script>
<?php 
$servername = "localhost";
$username = "id6195420_prady";
$password = "qwerty";
$dbname = "id6195420_iws";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["eid"])){
    $email = $_POST["eid"];
    $sql = "select * from details where email='$email'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $row = $result->fetch_assoc();
        if($row["active"]==1){
            echo '<script type="text/javascript">f3();</script>';
            exit();
        }else if($row["active"]==2){
            echo '<script type="text/javascript">f2();</script>';
            exit();
        }else{
            echo '<script type="text/javascript">f4();</script>';
            $sql2 = "delete from details where email='$email'";
            if($conn->query($sql2)===TRUE){
                echo "";
            }else{
                echo "";
            }
            exit();
        }
    }else{
        echo '<script type="text/javascript">f1();</script>';
        exit();
    }
}
?>