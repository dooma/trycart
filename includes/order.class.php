<?php
  class Order {
    public function __construct($data){
    }

    public function index(){
      $query = DB::pdo()->prepare('SELECT * FROM orders');
      $query->execute();
      return $query->fetchObject();
    }

    public function remove($id){
      $query = DB::pdo()->prepare('DELETE * FROM orders WHERE id = :id');
      $query->bindParam(':id', $id);
      return $query->execute();
    }

    public function update($data){
    }

    public function show($id){
      $query = DB::pdo()->prepare('SELECT * FROM orders WHERE id = :id');
      $query->bindParam(':id', $id);
      $query->execute();
      return $query->fetchObject();
    }
  }
?>
