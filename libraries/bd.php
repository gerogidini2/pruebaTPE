<?php
  include_once 'libraries/conexion.php';
  
  function getMarcas(){
    $db = connect();
    $sentencia = $db->prepare( "select * from marca");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getCelulares($id){
    $db = connect();
    $sentencia = $db->prepare( "select * from modelo WHERE id_marca='$id'");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }
 ?>
