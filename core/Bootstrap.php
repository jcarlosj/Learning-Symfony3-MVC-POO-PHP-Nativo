<?php
  class Bootstrap {
    # Atributos

    # Static Method: Carga el Controlador
    public static function loadController( $controller ) {
      $controller = ucwords( $controller ). 'Controller';     # NOTA: ucwords convierte a mayúsculas el primer caracter de cada pañabra de una cadena.
      $path_controller = 'controllers/' .$controller. '.php'; # Crea el PATH del Controlador

      # Valida si NO existe el PATH del Controlador
      if( !is_file( $path_controller ) ) {
        $path_controller = 'controllers/' .ucwords( DEFAULT_CONTROLLER ). 'Controller.php'; # Redirecciona al controlador por defecto
        $controller = ucwords( DEFAULT_CONTROLLER ). 'Controller';
      }

      require_once $path_controller;  # Solicita el controlador

      return new $controller();       # Instancia el controlador existente y lo retorna
    }

    public static function loadMethod( $controller ) {

      if( isset( $_GET[ 'action' ] ) && method_exists( $controller, $_GET[ 'action' ] ) ) {
        self :: executeAction( $controller, $_GET[ 'action' ] );
      }
      else {
        self :: executeAction( $controller, DEFAULT_METHOD );
      }

    }

    public static function executeAction( $controller, $action ) {
      # TEST: echo '<p><b>Controlador: </b>'; var_dump( $controller ); echo '<br /><b>Método: </b>'; var_dump( $action ); echo '</p>'; 
      $controller -> $action();
    }

  }
?>
