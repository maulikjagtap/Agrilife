<?php
 
require_once ('db_connect.php');
 
if (isset($_POST['Submit'])) {
	
$target_dir="C:/xampp/htdocs/BikanerProject/images/";
$target_file= $target_dir . basename($_FILES["image"]["name"]); 
 move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);	
$location=$_FILES["image"]["name"];	
$p_name=$_POST['name'];
$p_text=$_POST['text'];

$sql = "INSERT INTO product (`p_name`, `p_text`,`p_image`) VALUES ('$p_name', '$p_text', '$location')";
$result= mysqli_query($conn,$sql);
if($result>0)
{
	header("Location:formproduct.php");
}
 
}
?>