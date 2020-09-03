<?php
  require_once "../model/db.php";
  class NguoiDung {

    public static function insert($data){
      $sql = "INSERT INTO public.nguoidung(id, name) VALUES (?, ?);";
      return DB::executeUpdate($sql, [
        $data["id"], $data["name"]
      ]);
    }

    public static function update($data){
      $sql = "UPDATE public.nguoidung SET name=? WHERE id=?;";
      return DB::executeUpdate($sql, [
        $data["name"], $data["id"]
      ]);
    }

    public static function delete($id){
      $sql = "DELETE FROM public.nguoidung WHERE id=?;";
      return DB::executeUpdate($sql, [$id]);
    }

    public static function getAll(){
      $sql = "SELECT id, name FROM nguoidung";
      return DB::executeQuery($sql, []);
    }

    public static function getOne($id){
      $sql = "SELECT id, name FROM nguoidung WHERE id=?;";
      return DB::executeQuery($sql, [$id])[0];
    }
  }
?>