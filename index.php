<h1>MVC POO PHP Nativo</h1>
<p>index.php</p>

<?php
  # Carga la configuración Global
  require_once 'configuration/global.conf.php';
  # Carga Controlador Base
  require_once 'core/ControllerBase.php';
  # Carga el Lanzador de la aplicación
  require_once 'core/Bootstrap.php';
  $bootstrap = new Bootstrap();

  # Carga los controladores desde el Lanzador
  if( isset( $_GET[ 'controller' ] ) ) {
    # NOTA: /?controller=hola - (crea la cadena) - "controllers/HolaController.php"
    $controller = $bootstrap -> loadController( $_GET[ 'controller' ] );
    $bootstrap -> loadMethod( $controller, $_GET[ 'controller' ] );
  }
  else {
    $controller = $bootstrap -> loadController( ucwords( DEFAULT_CONTROLLER ) );
    $bootstrap -> loadMethod( $controller, DEFAULT_METHOD );
  }

?>
