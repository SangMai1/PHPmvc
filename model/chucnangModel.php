<?php
  require_once "../model/db.php";
  class ChucNang {

    public static function insert($data){
      $sql = "INSERT INTO public.chucnang(id, name) VALUES (?, ?);";
      return DB::executeUpdate($sql, [
        $data["id"], $data["name"]
      ]);
    }

    public static function update($data){
      $sql = "UPDATE public.chucnang SET name=? WHERE id=?;";
      return DB::executeUpdate($sql, [
        $data["name"], $data["id"]
      ]);
    }

    public static function delete($id){
      $sql = "DELETE FROM public.chucnang WHERE id=?;";
      return DB::executeUpdate($sql, [$id]);
    }

    public static function getAll(){
      $sql = "SELECT id, name FROM chucnang";
      return DB::executeQuery($sql, []);
    }

    public static function getOne($id){
      $sql = "SELECT id, name FROM chucnang WHERE id=?;";
      return DB::executeQuery($sql, [$id])[0];
    }
  }
?>