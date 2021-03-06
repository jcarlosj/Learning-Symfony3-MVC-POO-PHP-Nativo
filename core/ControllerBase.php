<?php
  class ControllerBase {
    # Atributos
    protected $connection;

    # Constructor
    public function __construct() {
      require_once 'EntityBase.php';
      require_once 'ModelBase.php';
      require_once 'DataBase.php';

      $this -> connection = new DataBase();
      $this -> db = $this -> connection -> connect();

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

      # Implementa Helpers
      require_once 'core/Helpers.php';
      $helper = new Helpers();

      require_once 'views/' .$view. '.php';     # Lanza la vista
    }

    # Method: Genera Redirecciona
    public function redirect( $controller = DEFAULT_CONTROLLER, $action = DEFAULT_METHOD ) {
      header( 'Location:index.php?controller=' .$controller. '&action=' .$action );
    }

  }
?>
