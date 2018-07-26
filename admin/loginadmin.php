<?php
include('db_connect.php');
session_start();
$a_email = $_POST['email'];
$u_pass = $_POST['password'];
$sql = "SELECT * FROM users  WHERE u_email='$a_email' AND u_password='$u_pass'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	$name = $row['u_firstname'];
}


$_SESSION["a_name"] =$name;
header('Location:admindashbord.php');


?>