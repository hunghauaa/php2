<?php 
require_once('../../connect.php');
$id = $_GET['id'];
$query = "DELETE FROM author WHERE id =".$id;
$status = $conn->query($query);
if ($status == true) {
    setcookie('msg','Xóa thành công',time()+5);
    header('Location: author.php');
}
else{
    setcookie('msg','Xóa thất bại',time()+5);
    header('Location: author_delete.php?id='.$id);
}
 ?>}
