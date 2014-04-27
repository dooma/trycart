<?php
  /* Provide simple connection with database */

  class DB {
    /* Create a connection when class is invoked */
    public static function pdo(){
      return new PDO('mysql:host=localhost;dbname=oshop', 'oshop', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }
  }
?>
