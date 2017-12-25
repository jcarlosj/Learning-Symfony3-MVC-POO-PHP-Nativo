<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MVC POO PHP Nativo</title>
  </head>
  <body>
    <h2>Agregar usuarios</h2>
      <form class="" action="<?php echo $helper -> url( 'user', 'create' ); ?>" method="post">
        <p>
          <label for="">Nombres</label>
          <input type="text" name="nombres" value="" />
        </p>
        <p>
          <label for="">Apellidos</label>
          <input type="text" name="apellidos" value="" />
        </p>
        <p>
          <label for="">Correo</label>
          <input type="text" name="email" value="" />
        </p>
        <p>
          <label for="">Contraseña</label>
          <input type="text" name="clave" value="" />
        </p>
        <p>
          <button type="submit" name="button">Enviar</button>
        </p>
      </form>
    <h2>Listado de usuarios</h2>
    <ul>
      <?php foreach ( $all_users as $key => $user ) : ?>
        <li>
          <?php echo $user -> id. ' - '. $user -> nombres. ' - '. $user -> apellidos. ' - '. $user -> email; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
