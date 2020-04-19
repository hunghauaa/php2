<?php
	require_once('../../connect.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
	// upload file
	$target_dir = "../../img/";  // thư mục chứa file upload
	$thumbnail="";

	$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); // link sẽ upload file lên
	$status = move_uploaded_file($_FILES
		["thumbnail"]["tmp_name"], $target_file);
	if ($status) {
		$thumbnail = basename($_FILES["thumbnail"]["name"]);
		# code...
	}
	$title = $_POST['title'];
	$description = $_POST['description'];
	$contents = $_POST['contents'];
	$category_id = $_POST['category_id'];
	$author_id = 3;
	$created_at =  date('Y-m-d H:i:s');
	$status = 0;
	if (isset($_POST['status'])) {
		# code...
		$status = $_POST['status'];
	}
	$query1 = "INSERT INTO post(title,description,thumbnail,contents,category_id,author_id,status,created_at) VALUES('".$title."','".$description."','".$thumbnail."','".$contents."','".$category_id."','".$author_id."','".$status."','".$created_at."')";	
	$status1 = $conn->query($query1);
	if ($status1 == true) {
	setcookie('msg','Thêm mới thành công',time()+5);
	header('Location: post.php');
}
else{
	setcookie('msg','Thêm mới thất bại',time()+5);
	header('Location: post_add.php');
}
 ?>