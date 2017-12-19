<?php
  class UserController extends ControllerBase {
    # Atributos

    # Constructor
    public function __construct() {
      echo 'Saludos desde "UserController.php"<br />';

      parent :: __construct();
    }

    # Method: Inicial
    public function index() {
      echo 'Saludos desde el método <b>[index]</b> desde el <b>UserController</b>';

      $user = new User( $this -> db ); # Instancia la estructura de la Entidad
      $all_users = $user -> getAll(); # Obtiene todos los usuarios de la Entidad

      $this -> view(
        'user/index',     # Nombre de la vista
        array(
          'all_users' => $all_users
)      );
    }

    # Method: Inicial
    public function hello() {
      echo 'Saludos desde el método <b>[hello]</b> desde el <b>UserController</b>';

      $this -> view(
        'user/hello',     # Nombre de la vista
        array(
          'saludos' => array(
            'hola',
            'buenos dias',
            'buenas noches'
          )
        )
      );
    }

  }
?>
