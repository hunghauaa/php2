<?php
    require_once('../../connect.php');
    $id = $_GET['id'];
    $query ="SELECT * FROM post WHERE id =".$id;
    $post = $conn->query($query)->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center" > Zent - Education And Technology Group</h3>
		<h3 align="center">Post Datail</h3>
		<hr>
		<h2>Title:<?= $post['title'];  ?></h2>
		<h2>Description: <?= $post['description']; ?></h2>
        <h2>Content: <?= $post['contents']; ?></h2>
        <h2>thumbnail: <img src="<?= $post['thumbnail']; ?>"></h2>
        <h2>Created at: <?= $post['created_at'];?></h2>
		
	</div>

</body>
</html>