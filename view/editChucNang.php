<?php
  require_once "../model/chucnangModel.php";
  $method = $_SERVER['REQUEST_METHOD'];
  if($method == "POST"){
    ChucNang::update($_POST);
    header("Location:/chucnang/allChucNang");
  } else {
    $result = ChucNang::getOne($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit chuc nang</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <form action="/chucnang/editChucNang" method="post">
      <div class="form-group">
        <label>Id</label>
        <input type="text" name="id" value="<?php echo ($result['id'])?>">
      </div>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo ($result['name']) ?>">
      </div>
      <button class="btn btn-primary" type="submit">Cap nhat</button>

    </form>
</body>
</html>

<?php 
  }
?>