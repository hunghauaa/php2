<?php
    require_once('../../connect.php');
    $query ="SELECT * FROM categories";
    $result = $conn->query($query);
    $cate = array();
    while ($row = $result->fetch_assoc()) {
        $cate[] = $row;
        # code...
    } 
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
    <h3 align="center">Zent - Education And Technology Group</h3>
    <h3 align="center">Category List</h3>
    <a href="category_add.php" type="button" class="btn btn-primary">Thêm mới</a>
        <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-success">
          <strong>Thành công </strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
    <hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">#</th>
        </tr>
      </thead>
      <tbody>
         <?php foreach ($cate as $cate1) { ?>
        <tr>
          <th scope="row"><?php echo $cate1['id']; ?></th>
          <td><?php echo $cate1['title'] ; ?></td>
          <td><?php echo $cate1['description']; ?></td>
          <td>
            <a href="category_detail.php?id=<?php echo $cate1['id']; ?>" type="button" class="btn btn-default">Xem</a>
            <a href="category_edit.php?id=<?php echo $cate1['id']; ?>" type="button" class="btn btn-success">Sửa</a>
            <a href="category_delete.php?id=<?php echo $cate1['id']; ?>" type="button" class="btn btn-warning">Xóa</a>
          </td>
        </tr>
              <?php } ?>
      </tbody>
    </table>
    </div>
</body>
</html>