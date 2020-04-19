<?php 
require_once('../../connect.php');
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$query = "UPDATE categories SET title = '".$title."',description = '".$description."' WHERE id =".$id;
$status = $conn->query($query);
if ($status == true) {
	setcookie('msg','Cập nhật thành công',time()+5);
	header('Location: categories.php');
}
else{
	setcookie('msg','Cập nhật thất bại',time()+5);
	header('Location: category_edit_action.php?id='.$id);
}
 ?>}
