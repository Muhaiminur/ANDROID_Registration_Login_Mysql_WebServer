<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

include 'DatabaseConfig.php';

 $con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);

 $Full_Name = $_POST['name'];

 $Email = $_POST['email'];
 
 $Password = $_POST['password'];
 

 $CheckSQL = "SELECT * FROM user_login WHERE User_Email='$Email'";
 
 $check = mysqli_fetch_array(mysqli_query($con,$CheckSQL));
 
 if(isset($check)){

 echo 'Email Already Exist, Please Enter Another Email.';

 }
else{ 
$Sql_Query = "INSERT INTO user_login (name,email,password) values ('$Full_Name','$Email','$Password')";

 if(mysqli_query($con,$Sql_Query))
{
 echo 'User Registration Successfully';
}
else
{
 echo 'Something went very wrong';
 }
 }
}
 mysqli_close($con);
?>