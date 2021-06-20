<?php
   $username = 'root';
   $password = 'my-password';
   $dsn = 'mysql:host=localhost;dbname=mydb;port=330';


   try {
      $db = new PDO($dsn, $username, $password);
   } catch(PDOException $e) {
      $error = $e->getMessage();
   }
