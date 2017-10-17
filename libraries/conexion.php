<?php
  function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=db_celulares;charset=utf8'
    , 'root', '');
  }
 ?>
