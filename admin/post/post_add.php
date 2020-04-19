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
    <h3 align="center">Add New Post</h3>
    <hr>
    <?php if(isset($_COOKIE['msg'])){ ?>
        <div class="alert alert-warnning">
          <strong>Thất bại</strong> <?= $_COOKIE['msg'] ?>
        </div>
    <?php } ?>
        <form action="post_add_action.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Contents</label>
                <textarea class="form-control" id="" name="contents" rows="8"></textarea>
            </div>
            <div class="form-group">
                <label for="">Thumbnai</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
                        <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                    <?php foreach($cate as $c){  ?>
                    <option value="<?= $c['id'];?>"><?= $c['title'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Hiển thị bài viết</label>
                <input type="checkbox" id="" placeholder="" value="1" name="status"><em>(Check để hiển thị bài viết)</em>
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>