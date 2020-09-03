<?php
  require_once "../model/nhomModel.php";
  $method = $_SERVER['REQUEST_METHOD'];
  if($method == "POST"){
    Nhom::update($_POST);
    header("Location:/nhom/allNhom");
  } else {
    $result = Nhom::getOne($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <form action="/nhom/editNhom" method="post">
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