<?php
  require_once('../includes/product.class.php');
?>
<html>
  <head>
    <title>OShop</title>
    <link rel='stylesheet' href='assets/css/normalize.css'>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js'></script>
  </head>
  <body>
    <pre>
    <?php
        if(isset($_GET['id'])){
          $product = Product::show($_GET['id']);
        }
    ?>
    </pre>
    <h1><?php echo $product->name ?></h1>
    <p><?php echo $product->description ?></p>
    <?php
      if($product->quantity == 0){
        echo 'Stoc indisponibil';
      } else {
        echo '<input type="number" min="1" max="'.$product->quantity.'" name="quantity" id="quantity" value="1" /><br />';
        echo '<input type="submit" id="addToCart" value="Adauga in cos" />';
      }
    ?>
  </body>
</html>
