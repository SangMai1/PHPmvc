<?php
  require_once "../model/nguoidungModel.php";
  $id = $_GET['id'];
  NguoiDung::delete($id);
  header("Location:/nguoidung/allNguoiDung");
?>