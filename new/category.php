<?php
  require_once('../includes/category.class.php');
?>
<html>
  <head>
    <title>OShop</title>
    <link rel='stylesheet' href='assets/css/normalize.css'>
  </head>
  <body>
    <h1>Categorie noua</h1>
    <?php
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        print_r(Category::new_object($_POST));
      }
    ?>
    <form action='category.php' method='POST'>
      <label for='name'>Nume categorie</label>
      <input type='text' name='name' id='name' pattern='.{1,}' required /><br />

      <input type='submit' value='Creeaza' />
    </form>
  </body>
</html>
