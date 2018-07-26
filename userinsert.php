<?php
include('db_connect.php');
$type = $_POST['usertype'];
$f_name = $_POST['firstname'];
$l_nmae = $_POST['lastname'];
$add = $_POST['address'];
$mno = $_POST['mobile'];
$city = $_POST['city'];
$a_no = $_POST['addhar'];
$email = $_POST['mail'];
$gen = $_POST['gender'];
$password = $_POST['pwd'];

$sql = "INSERT INTO users (`u_type`, `u_firstname`, `u_lastname`, `u_address`, `u_mobile`, `u_city`, `u_aadharno`, `u_email`, `u_gender`, `u_password` ) VALUES 
('$type', '$f_name', '$l_nmae', '$add', '$mno', '$city', '$a_no', '$email', '$gen', '$password')";
$result = mysqli_query($conn,$sql);

if($result){
	header("Location:index.php");
}

else{
	header("Location:signUp.php");
}
?>