<?php
    require_once('../../connect.php');
    $id = $_GET['id'];
    $query ="SELECT * FROM categories WHERE id =".$id;
    $category = $conn->query($query)->fetch_assoc();
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
		<h3 align="center">Category Datail</h3>
		<hr>
		<h2>Title:<?= $category['title'];  ?></h2>
		<h2>Description: <?= $category['description']; ?></h2>
		
	</div>

</body>
</html>