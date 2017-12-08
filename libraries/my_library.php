<?php 
  
  /**
   * Funcion post que retornará el valor de la
   *  variable solicitada en al variable $_POST[]
   *
   * @param mixed $variable
   * @return mixed
   */
  function post($variable){
    if (isset($_POST[$variable])) {
      return trim(stripslashes($_POST[$variable]));
    }else {
      return null;
    }
  }
  
  /**
   * Funcion post que retornará el valor de la
   *  variable solicitada en al variable $_GET[]
   *
   * @param mixed $variable
   * @return mixed
   */
  function get($variable){
    if (isset($_GET[$variable])) {
      return trim(stripslashes($_GET[$variable]));
    }else {
      return null;
    }
  }

  /**
   * Función que verifica si la petición al servidor es de tipo ajax
   *
   * @return boolean
   */
  function is_ajax_request(){
    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
      return true;
    }else{  
      return false;
    } 
  }
?>