<?php
  include_once 'libs/Smarty.class.php';
  include_once 'libraries/bd.php';
  define('HOME', 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

  function mostrar_inicio(){
    cargar_header();
    $smarty = cargar_header();
    $smarty->display('templates/index.tpl');
  }

  function cargar_header(){
    $marcas = getMarcas();
    $smarty = new Smarty();
    $smarty->assign('marcas',$marcas);
    $smarty->assign('titulo',"Celulares");
    return $smarty;
  }

  function mostrarMarcas(){
  $marcas = getMarcas();
  $smarty = new Smarty();
  $smarty->assign('marcas', $marcas);
  $smarty->display('templates/tablaMarcas.tpl');
  }

  function mostrarCelulares($params){
  $celulares = getCelulares($params[0]);
  $smarty = new Smarty();
  $smarty->assign('celulares', $celulares);
  $smarty->display('templates/tablaCelulares.tpl');
  }
 ?>
