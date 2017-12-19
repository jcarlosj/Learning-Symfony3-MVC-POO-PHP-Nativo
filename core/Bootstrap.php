<?php
  class Bootstrap {
    # Atributos

    # Static Method: Carga el Controlador
    public static function loadController( $controller ) {
      $controller = ucwords( $controller ). 'Controller';     # NOTA: ucwords convierte a mayúsculas el primer caracter de cada pañabra de una cadena.
      $file_Controller = 'controllers/' .$controller. '.php'; # Crea el PATH del Controlador

      var_dump( $file_Controller ); exit;

    }

  }
?>
