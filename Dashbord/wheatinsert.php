<?php
 
require_once ('db_connect.php');
session_start();
if (isset($_POST['Submit'])) {
	
$u_name=$_SESSION["name"];
$mob=$_SESSION["mobile"];
	
$target_dir="C:/xampp/htdocs/BikanerProject/images/";
$target_file= $target_dir . basename($_FILES["image"]["name"]); 
 move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);	
$location=$_FILES["image"]["name"];	
$name=$_POST['typename'];
$weight=$_POST['quintals'];
$price=$_POST['price'];

$sql = "INSERT INTO wheat (`w_name`, `w_weight`,`w_image`, `w_price`, `s_name`, `s_mobno`) VALUES ('$name', '$weight', '$location', '$price', '$u_name', '$mob')";
$result= mysqli_query($conn,$sql);
if($result>0)
{
	header('Location:Wheatofyours.php');
}
 
}
?>