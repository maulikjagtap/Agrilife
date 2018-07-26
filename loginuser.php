<?php
include('db_connect.php');
session_start();
$u_no = $_POST['m_no'];
$password = $_POST['pass'];
$sql = "SELECT * FROM users  WHERE u_mobile='$u_no' AND u_password='$password'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	$name = $row['u_firstname'];
	$address = $row['u_address'];
	$city = $row['u_city'];
	$type = $row['u_type'];
}
$_SESSION["name"] =$name;
$_SESSION["mobile"] =$u_no;
$_SESSION["city"] = $city;
$_SESSION["address"] =$address;
if($type=="Seller")
{
	header('Location:Dashbord/sellerdashboard.php');
}
if($type=="Buyer")
{
	
	header('Location:Dashbord/buyerdashboard.php');
}

?>