<h1>MVC POO PHP Nativo</h1>
<p>index.php</p>

<?php
  require_once 'core/DataBase.php';
  require_once 'core/EntityBase.php';

  require_once 'core/ModelBase.php';
  $model = new ModelBase( 'usuarios' );

  # Obtener registro por ID
  echo '<h3>Obtener registro por ID</h3>';
  $data = $model -> getById( 1 );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Obtener registro por Campo y Valor
  echo '<h3>Obtener registro por Campo y Valor</h3>';
  $data = $model -> getBy( 'nombres', 'Gerónimo' );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Eliminar registro por ID
  echo '<h3>Eliminar registro por ID</h3>';
  $data = $model -> deleteById( 2 );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Eliminar registro por Campo y Valor
  echo '<h3>Eliminar registro por Campo y Valor</h3>';
  $data = $model -> deleteBy( 'email', 'ana@correo.co' );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Obtener todos los registros
  echo '<h3>Obtener todos los registros</h3>';
  $data = $model -> getAll();
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Obtener registros consulta personalizada
  echo '<h3>Obtener registros consulta personalizada</h3>';
  $query = "SELECT * FROM usuarios WHERE nombres LIKE 'P%'; ";
  $data = $model -> executeSql( $query );
  echo '<pre>'; var_dump( $data ); echo '</pre>';
?>
