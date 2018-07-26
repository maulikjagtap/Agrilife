<?php
include('db_connect.php');

$email = $_POST['email'];
$mno = $_POST['mobile'];
$city = $_POST['city'];



$sql = "INSERT INTO urbnadetail (`mobile_no`, `email`, `city`) VALUES (  '$mno', '$email', '$city')";
$result = mysqli_query($conn,$sql);

if($result){
		
}

else{
	header("Location:signUp.php");
}
?>