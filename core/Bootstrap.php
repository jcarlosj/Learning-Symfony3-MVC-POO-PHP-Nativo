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
      }

      var_dump( $path_controller ); exit;

    }

  }
?>
