<?php
  require_once "../model/nhomModel.php";
  $method = $_SERVER['REQUEST_METHOD'];
  if($method == "POST"){
    Nhom::insert($_POST);
    header("Location:/nhom/addNhom");
  } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add nhom</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <form action="/nhom/addNhom" method="post">
      <div class="form-group">
        <label>Id</label>
        <input type="text" name="id">
      </div>
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name">
      </div>
      <button class="btn btn-primary" type="submit">Save</button>
      <a class="btn btn-primary" href="/nhom/allNhom">List</a>
    </form>
</body>
</html>

<?php
  }
?>