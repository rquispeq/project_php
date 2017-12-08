<?php 

  /**
   * Funciòn que permite establecer un valor en un indice 
   * dentro de la variable $_SESSION
   *
   * @param string $index
   * @param mixed $value
   * @return void
   */
  function set_userdata($index, $value){
    if (!empty($_SESSION)) {
      $_SESSION[$index] = $value;
    }
    
  }

  /**
   * Función que permite obtener el valor dentro de $_SESSION 
   * en base al indice recibido
   *
   * @param string $index
   * @return mixed
   */
  function get_user_data($index){
    if (!isset($_SESSION[$index])) {
      return null;
    }

    return $_SESSION[$index];
  }
  
  /**
   * Función que ayuda a determinar si se ha iniciado sesion o no
   *
   * @return boolean
   */
  function exist_session(){
    if (!empty($_SESSION)) {
      return true;
    }else {
      return false;
    }
  }

?>