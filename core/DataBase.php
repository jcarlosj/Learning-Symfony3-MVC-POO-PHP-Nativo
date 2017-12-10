<?php
  class DataBase {
    # Atributos
    private $driver,
            $host,
            $user,
            $pass,
            $database,
            $charset;

    # Constructor
    public function __construct() {
      $db_config = require_once 'configuration/database.conf.php';

      $this -> driver   = $db_config[ 'driver' ];
      $this -> host     = $db_config[ 'host' ];
      $this -> user     = $db_config[ 'user' ];
      $this -> pass     = $db_config[ 'pass' ];
      $this -> database = $db_config[ 'database' ];
      $this -> charset  = $db_config[ 'charset' ];
    }

    # Realiza la conexión a la Base de Datos
    public function connect() {
      # Valida Driver para MySQL
      if( $this -> driver == 'mysql' || $this -> driver == null ) {
        $connect = new mysqli(
          $this -> host,
          $this -> user,
          $this -> pass,
          $this -> database
        );

        # Valida si la conexión a la Base de Datos a fallado
        if ( !$connect ) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos, es genial." . PHP_EOL;
        echo "Información del host: " . mysqli_get_host_info($connect) . PHP_EOL;

        return $connect;
      }
    }

  }
?>
