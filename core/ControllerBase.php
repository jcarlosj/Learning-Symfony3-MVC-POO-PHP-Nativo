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
    public function view( $view, $data = null ) {

      if( $data ) {
        # Recorre 'array' asociativo $data
        foreach ( $data as $key => $value ) {
          ${$key} = $value;
        }
      }


      require_once 'views/' .$view. '.php';     # Lanza la vista
    }

  }
?>
