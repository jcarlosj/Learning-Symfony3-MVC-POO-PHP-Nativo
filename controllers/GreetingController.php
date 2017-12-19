<?php
  class GreetingController {
    # Atributos

    # Constructor
    public function __construct() {
      echo 'Saludos desde "GreetingController.php"<br />';
    }

    # Method: Inicial
    public function index() {
      echo 'Saludos desde el método <b>[index]</b> desde el <b>GreetingController</b>';
    }

    # Method: Inicial
    public function saludo() {
      echo 'Saludos desde el método <b>[saludo]</b> desde el <b>GreetingController</b>';
    }

  }
?>
