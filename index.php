<?php
  require_once('includes/product.class.php');
?>
<html>
  <head>
    <title>OShop</title>
    <link rel='stylesheet' href='assets/css/normalize.css'>
  </head>
  <body>
    <center><h1>Hi there</h1></center>
    <a href='new/product.php'>Adauga produs</a>
    <a href='new/category.php'>Adauga categorie</a>
    <section>
      <h3>Products</h3>
      <?php
        $inst = Product::index();
        echo '<div>';
        while($row = $inst->fetchObject()){
          echo '<p>';
          echo '<a href="show/product.php?id='.$row->id.'">'.$row->name.'</a>';
          echo '</p>';
        }
        echo '</div>';
      ?>
    </section>
  </body>
</html>
