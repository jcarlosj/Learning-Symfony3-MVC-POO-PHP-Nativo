<?php
  class UserController {
    # Atributos

    # Constructor
    public function __construct() {
      echo 'Saludos desde "UserController.php"<br />';
    }

    # Method: Inicial
    public function index() {
      echo 'Saludos desde el método <b>[index]</b> desde el <b>UserController</b>';
    }

    # Method: Inicial
    public function hello() {
      echo 'Saludos desde el método <b>[hello]</b> desde el <b>UserController</b>';
    }

  }
?>
