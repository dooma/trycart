<?php
  class User {
    public function __construct($data){
    }

    public function index(){
      $query = DB::pdo()->prepare('SELECT * FROM users');
      $query->execute();
      return $query->fetchObject();
    }

    public function remove($id){
      $query = DB::pdo()->prepare('DELETE * FROM users WHERE id = :id');
      $query->bindParam(':id', $id);
      return $query->execute();
    }

    public function update($data){
    }

    public function show($id){
      $query = DB::pdo()->prepare('SELECT * FROM users WHERE id = :id');
      $query->bindParam(':id', $id);
      $query->execute();
      return $query->fetchObject();
    }
  }
?>
