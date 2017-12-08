<?php 

  $bd_config['localhost'] = '';
  $bd_config['usuario']   = '';
  $bd_config['password']  = '';
  $bd_config['bd']        = '';

  $conexion = null;

  function conexion($bd_config){
    try {
      $conexion = new PDO("mysql:host=" . $bd_config['localhost'] . ";dbname=".$bd_config['bd'],
                          $bd_config['usuario'],
                          $bd_config['password']);
      return $conexion;
    } catch (PDOException $e) {
      return false;
    }
  }

  $conexion = conexion($bd_config);

?>