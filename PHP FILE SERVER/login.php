<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

// $Full_Name = $_POST['name'];

 $Email = $_POST['email'];
 
 $Password = $_POST['password'];
 $query = "Select * from user_login where email='$Email' and password = '$Password' ";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result)>0){
 $json['success'] = ' Welcome '.$email;
 echo json_encode($json);
 mysqli_close($con);
 }else{
  $json['error'] = 'Wrong password or user name';
  mysqli_close($con);
 }
}
 
?>