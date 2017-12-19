<?php
  class Helpers {
    # Atributos

    # Method: Genera URL
    public function url( $controller = DEFAULT_CONTROLLER, $action = DEFAULT_METHOD ) {
      return 'index.php?controller=' .$controller. '&action=' .$action;
    }

  }
?>
