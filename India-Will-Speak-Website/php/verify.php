<script type="text/javascript">
  function match(){
    alert("Codes do not match");
  }
  function verified(){
    alert("Email-id already verified");
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
if(isset($_POST['email']) && isset($_POST['code'])){
  $email = $_POST['email'];
  $code = $_POST['code'];
  $sql = "SELECT * FROM details where email='$email'"; 
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
    if(substr($row["hash"],0,4)==$code){
        if($row["active"]==1){
          echo '<script type="text/javascript">verified();</script>';
        }else{
          $quer = "Update details set active=1 where email='$email'";
          
          $quer2 = "create table ".md5($email)." (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,datatype TEXT , owner INT(6) UNSIGNED, partner INT(6) UNSIGNED, identity TEXT ,following INT(6),rating INT(6))";
          if ($conn->query($quer2) === TRUE) {
              echo '';
                }
            else{
              echo "Error creating table: " . $conn->error;
            }
            if ($conn->query($quer) === TRUE) {
              echo 'Click <a href="../html/login.html">here</a> to go back to login page.';
                }
            else{
                echo "";
            }
        }
    
    }else{
      echo '<script type="text/javascript">match();</script>';
    }
    $conn->close();
}
?>