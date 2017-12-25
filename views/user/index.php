<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
      crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
      integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
      crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-1.12.4.min.js"
      integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
      crossorigin="anonymous"></script>
    <title>MVC POO PHP Nativo</title>
    <style media="screen">
      section {
        height: 400px;
        overflow-y: scroll;
      }
      .item-user {
        height: 30px;
      }
      .right {
        float: right;
      }
      a.btn.btn-danger {
        height: 26px;
        padding-top: 2px;
      }
    </style>
  </head>
  <body>
      <form class="col-lg-5" action="<?php echo $helper -> url( 'user', 'create' ); ?>" method="post">
        <h2>Agregar usuarios</h2>
        <hr />
        <p>
          <label for="">Nombres</label>
          <input class="form-control" type="text" name="nombres" value="" />
        </p>
        <p>
          <label for="">Apellidos</label>
          <input class="form-control" type="text" name="apellidos" value="" />
        </p>
        <p>
          <label for="">Correo</label>
          <input class="form-control" type="text" name="email" value="" />
        </p>
        <p>
          <label for="">Contraseña</label>
          <input class="form-control" type="text" name="clave" value="" />
        </p>
        <p>
          <button class="btn btn-success" type="submit" name="button">Enviar</button>
        </p>
      </form>

      <div class="col-lg-7">
        <h2>Listado de usuarios</h2>
        <hr />
      </div>  <!-- .col-lg-7 -->
      <section class="col-lg-7">
        <ul>
          <?php foreach ( $all_users as $key => $user ) : ?>
            <li class="item-user">
              <?php echo $user -> id. ' - '. $user -> nombres. ' - '. $user -> apellidos. ' - '. $user -> email; ?>
              <div class="right">
                <a class="btn btn-danger" href="<?php echo $helper -> url( 'user', 'eliminar' ); ?>&id=<?php echo $user -> id; ?>">Borrar</a>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>    <!-- .col-lg-7 -->
    <footer class="col-lg-12">Copyright &copy; <?php echo date( 'Y' ); ?></footer>
      <!-- .col-lg-12 -->
  </body>
</html>
