<?php
    require_once "../model/nhomModel.php";
    $result = Nhom::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View nhom</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <form method="GET">
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Select</th>
        </tr>
        <?php
          for($i = 0; $i < count($result); $i++){
        ?>
        <tr>
          <td><?php echo $result[$i]['id'] ?></td>
          <td><?php echo $result[$i]['name'] ?></td>
          <td>
            <a class="btn btn-primary" href="/nhom/editNhom?id=<?php echo $result[$i]['id'] ?>">Edit</a>
            <a class="btn btn-primary" href="/nhom/deleteNhom?id=<?php echo $result[$i]['id'] ?>">Delete</a>
          </td>
        </tr>
          <?php } ?>
      </table>
    </form>
</body>
</html>
