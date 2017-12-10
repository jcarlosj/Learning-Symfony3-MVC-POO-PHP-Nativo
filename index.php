<h1>MVC POO PHP Nativo</h1>
<p>index.php</p>

<?php
  require_once 'core/DataBase.php';

  require_once 'core/EntityBase.php';
  $entity = new EntityBase( 'usuarios' );

  # Obtener registro por ID
  echo '<h3>Obtener registro por ID</h3>';
  $data = $entity -> getById( 2 );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Obtener registro por Campo y Valor
  echo '<h3>Obtener registro por Campo y Valor</h3>';
  $data = $entity -> getBy( 'email', 'ana@correo.co' );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Eliminar registro por ID
  echo '<h3>Eliminar registro por ID</h3>';
  $data = $entity -> deleteById( 2 );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Eliminar registro por Campo y Valor
  echo '<h3>Eliminar registro por Campo y Valor</h3>';
  $data = $entity -> deleteBy( 'email', 'ana@correo.co' );
  echo '<pre>'; var_dump( $data ); echo '</pre>';

  # Obtener todos los registros
  echo '<h3>Obtener todos los registros</h3>';
  $data = $entity -> getAll();
  echo '<pre>'; var_dump( $data ); echo '</pre>';
?>
