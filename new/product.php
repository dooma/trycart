<?php
  require_once('../includes/category.class.php');
  require_once('../includes/product.class.php');
?>
<html>
  <head>
    <title>OShop</title>
    <link rel='stylesheet' href='assets/css/normalize.css'>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js'></script>
  </head>
  <body>
    <h1>Produs nou</h1>
    <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        print_r(Product::new_object($_POST));
      }
    ?>
    <form action='product.php' method='POST'>
      <label for='name'>Nume produs</label>
      <input type='text' name='name' id='name' /><br/>

      <label for='description'>Descriere</label>
      <textarea name='description' id='description'></textarea><br/>

      <label for='price'>Pret</label>
      <input type='number' name='price' id='price' /> RON<br/>

      <label for='quantity'>Cantitate</label>
      <input type='number' name='quantity' id='quantity' placeholder='numar bucati' /><br/>

      <label for='picture'>Imagine</label>
      <input type='file' name='picture' id='picture' /><br/>

      <label for='category_id'>Categorie</label>
      <select name='category_id' id='category_id' />
      <?php
        $categories = Category::index();
        while($row = $categories->fetchObject()){
          echo '<option value="'.$row->id.'">'.$row->name.'</option>';
        }
      ?>
      </select><br />

      <input type='submit' value='Creeaza' />
    </form>
  </body>
</html>
