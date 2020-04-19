<?php 
require_once('../../connect.php');
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$query = "UPDATE author SET name = '".$name."',email = '".$email."' WHERE id =".$id;
$status = $conn->query($query);
if ($status == true) {
	setcookie('msg','Cập nhật thành công',time()+5);
	header('Location: author.php');
}
else{
	setcookie('msg','Cập nhật thất bại',time()+5);
	header('Location: author_edit.php?id='.$id);
}
 ?>
