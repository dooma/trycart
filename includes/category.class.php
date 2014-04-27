<?php
  require_once('db.class.php');

  class Category {
    public function __construct(){
    }

    public function new_object($data){
      if(strlen($data['name']) == 0){
        return 'Va rog sa introduceti numele categoriei';
      }

      try {
        $query = DB::pdo()->prepare('INSERT INTO categories (name) VALUES (:name)');
        $query->bindParam(':name', $data['name']);
        $query->execute();
        return 'Categoria a fost introdusa cu success';
      } catch(PDOException $e){
        return 'Eroare la introducerea categoriei';
      }
    }

    public function index(){
      $query = DB::pdo()->prepare('SELECT * FROM categories');
      $query->execute();
      return $query;
    }

    public function remove($id){
      $query = DB::pdo()->prepare('DELETE * FROM categories WHERE id = :id');
      $query->bindParam(':id', $id);
      return $query->execute();
    }

    public function update($data){
    }

    public function show($id){
      $query = DB::pdo()->prepare('SELECT * FROM categories WHERE id = :id');
      $query->bindParam(':id', $id);
      $query->execute();
      return $query->fetchObject();
    }
  }
?>
