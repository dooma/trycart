<?php
  require_once('db.class.php');

  class Product {
    public function __construct(){
    }

    public function new_object($data){
      try{
        $fields = array('name','description','price','quantity','picture','category_id');
        $query_string = 'INSERT INTO products (';
        $query_string2 = ') VALUES (';

        foreach($fields as &$elem){
         $query_string .= $elem.',';
         $query_string2 .= ':'.$elem.',';
        }
        $query_string = rtrim($query_string,',').rtrim($query_string2,',').')';

        $query = DB::pdo()->prepare($query_string);

        foreach($fields as &$elem){
          $query->bindParam(':'.$elem, $data[$elem]);
        }
        $query->execute();
        return 'Produsul a fost introdus cu success';
      } catch(PDOException $e){
        return 'Eroare la introducerea produsului';
      }

    }

    public function index(){
      $query = DB::pdo()->prepare('SELECT * FROM products');
      $query->execute();
      return $query;
    }

    public function remove($id){
      $query = DB::pdo()->prepare('DELETE * FROM products WHERE id = :id');
      $query->bindParam(':id', $id);
      return $query->execute();
    }

    public function update($data){
    }

    public function show($id){
      $query = DB::pdo()->prepare('SELECT * FROM products WHERE id = :id ');
      $query->bindParam(':id', $id);
      $query->execute();
      return $query->fetchObject();
    }
  }
?>
