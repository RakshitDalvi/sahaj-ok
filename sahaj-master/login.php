<?php
$user_name= $_POST['user_name'];
$password= $_POST['password'];
$con= new mysqli("localhost","root","","login");
if($con->connect_error){
  die("Failed to connect : ".$con->connect_error);
}
else {
  $stmt = $con->prepare("select * from registration where user_name = ?");
  $stmt->bind_param("s",$user_name);
  $stmt->execute();
  $stmt_result=$stmt->get_result();
  if($stmt_result->num_rows > 0){
    $data = $stmt_result->fetch_assoc();
    if($data['password']=== $password){
      readfile('idinput.php');
    }
  else{
    echo "<h2>invalid email or password</h2>";
}
}
 else{
  echo "<h2>invalid email or password</h2>";
}
}
 ?>
