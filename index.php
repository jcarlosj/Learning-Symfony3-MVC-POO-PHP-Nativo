<h1>MVC POO PHP Nativo</h1>
<p>index.php</p>

<?php
  require_once 'core/DataBase.php';

  require_once 'core/ControllerBase.php';
  $controllerBase = new ControllerBase();

  $users = new UsersModel();

  $email = 'pedro@correo.co';
  $user = $users -> getUserByEmail( $email );

  # TEST: var_dump( $user );

  if( $user ) {
    echo '<p><b>Nombres: </b>' .$user -> nombres. '<br />'.
         '<b>Apellidos: </b>' .$user -> apellidos. '<br />'.
         '<b>Correo: </b>' .$user -> email. '</p>';
  }
  else {
    echo '<p>No se ha encontrado ningun registro con el correo ' .$email. '</p>';
  }

?>
