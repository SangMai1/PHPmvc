<?php
  class DB {
    private static function getConnection(){
      return new PDO("pgsql:dbname=php;host=localhost", "postgres", "12345");
    }

    public static function executeQuery($sql, $params = null){
      $conn = DB::getConnection();
      $sth = $conn -> prepare($sql);
      $sth -> execute($params);
      $result = $sth -> fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }

    public static function executeUpdate($sql, $params = null){
      $conn = DB::getConnection();
      $sth = $conn -> prepare($sql);
      $sth -> execute($params);
      return $sth -> rowCount();
    }
  }
?>