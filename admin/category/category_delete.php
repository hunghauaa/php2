<?php 
require_once('../../connect.php');
$id = $_GET['id'];
$query = "DELETE FROM categories WHERE id =".$id;
$status = $conn->query($query);
if ($status == true) {
    setcookie('msg','Xóa thành công',time()+5);
    header('Location: categories.php');
}
else{
    setcookie('msg','Xóa thất bại',time()+5);
    header('Location: category_delete.php?id='.$id);
}
 ?>}
