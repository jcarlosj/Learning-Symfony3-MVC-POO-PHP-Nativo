<?php
  class UserController extends ControllerBase {
    # Atributos

    # Constructor
    public function __construct() {
      # TEST: echo 'Saludos desde "UserController.php"<br />';

      parent :: __construct();
    }

    # Method: Inicial
    public function index() {
      # TEST: echo 'Saludos desde el método <b>[index]</b> desde el <b>UserController</b>';

      $user = new User( $this -> db ); # Instancia la estructura de la Entidad
      $all_users = $user -> getAll(); # Obtiene todos los usuarios de la Entidad

      $this -> view(
        'user/index',     # Nombre de la vista
        array(
          'all_users' => $all_users
        )
      );
    }

    /* Valida campos obligatorios */
    public function validateFieldForm( $field, $count ) {
      if( !empty( $_POST[ $field ] ) ) {

        return --$count;
      }
      return $count;
    }

    public function eliminar() {
      if( isset( $_GET[ 'id' ] ) ) {
        $id = (int) $_GET[ 'id' ];

        $usuario = new User( $this -> db );
        $usuario -> deleteById( $id );
      }

      $this -> redirect();
    }

    public function create() {
      # TEST:
      echo 'Saludos desde el método <b>[create]</b> desde el <b>UserController</b>';
      echo '<pre>'; var_dump( $_POST ); echo '</pre>';

      $validate = count( $_POST ) - 1;

      if( isset( $_POST ) ) {   # Si se recibe  $_POST
        $validate = $this -> validateFieldForm( 'nombres', $validate );
        $validate = $this -> validateFieldForm( 'apellidos', $validate );
        $validate = $this -> validateFieldForm( 'email', $validate );
        $validate = $this -> validateFieldForm( 'clave', $validate );
      }

      /* Valida si todos los campos obligatorios se diligenciaron */
      if ( $validate == 0 ) {
        $this -> registre();
      }

      $this -> redirect( 'User', 'index' );
    }

    public function registre() {

      $usuario = new User( $this -> db );               // Conexión viene de la clase padre 'ControllerBase'
      $usuario -> setNombres( $_POST[ 'nombres' ] );
      $usuario -> setApellidos( $_POST[ 'apellidos' ] );
      $usuario -> setEmail( $_POST[ 'email' ] );
      $usuario -> setClave( $_POST[ 'clave' ] );

      # TEST: echo '<pre>'; var_dump( $usuario ); echo '</pre>'; exit;
      $save = $usuario -> save();

    }

    # Method: Ejemplo
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
