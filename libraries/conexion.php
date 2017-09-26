<?php
  function connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=celulares;charset=utf8'
    , 'root', '');
  }
 ?>
