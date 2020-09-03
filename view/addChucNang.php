<?php
  require_once "../model/chucnangModel.php";
  $method = $_SERVER['REQUEST_METHOD'];
  if($method == "POST"){
    ChucNang::insert($_POST);
    header("Location:/chucnang/addChucNang");
  } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add chuc nang</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <form action="/chucnang/addChucNang" method="post">
      <div class="form-group">
        <label>Id</label>
        <input type="text" name="id">
      </div>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <button class="btn btn-primary" type="submit">Save</button>
      <a class="btn btn-primary" href="/chucnang/allChucNang">List</a>
    </form>
</body>
</html>

<?php
  }
?>