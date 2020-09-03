<?php
  require_once "../model/chucnangModel.php";
  $id = $_GET['id'];
  ChucNang::delete($id);
  header("Location:/chucnang/allChucNang");
?>