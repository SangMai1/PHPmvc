<?php
  require_once "../model/nhomModel.php";
  $id = $_GET['id'];
  Nhom::delete($id);
  header("Location:/nhom/allNhom");
?>