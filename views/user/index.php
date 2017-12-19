<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MVC POO PHP Nativo</title>
  </head>
  <body>
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
