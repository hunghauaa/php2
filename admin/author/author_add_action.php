<?php 
require_once('../../connect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$query = "INSERT INTO author(name,email,password) VALUES ('".$name."','".$email."','".$password."');";
$status = $conn->query($query);
if ($status == true) {
	setcookie('msg','Thêm mới thành công',time()+5);
	header('Location: author.php');
}
else{
	setcookie('msg','Thêm mới thất bại',time()+5);
	header('Location: author_add.php');
}
 ?>}
