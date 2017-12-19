<?php
  class ControllerBase {
    # Atributos

    # Constructor
    public function __construct() {
      require_once 'EntityBase.php';
      require_once 'ModelBase.php';

      # Incluye todos los archivos del modelo
      foreach ( glob( 'models/*.php' ) as $file ) {
        require_once $file;
      }
    }

    # Method: Despliega la Vista
    function view( $view, $data ) {
      # Recorre 'array' asociativo $data
      foreach ( $data as $key => $value ) {
        ${$key} = $value;
      }
    }

  }
?>
