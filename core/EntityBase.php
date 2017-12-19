<?php
  class EntityBase {
    # Atributos
    protected $db;
    private $table,
            $connection;

    # Constructor
    public function __construct( $table, $db ) {
      $this -> table = (string) $table;

      $this -> connection = null;
      $this -> db = $db;
    }

    # Devuelve la conexión de la Base de Datos
    public function getConnection() {
      return $this -> connection;
    }

    # Devuelve la Base de Datos
    public function getDB() {
      return $this -> db;
    }

    # Devuelve todos los registros
    public function getAll() {
      $resultSet = array();   # Inicializa

      $query = $this -> db -> query(
        "SELECT * FROM $this->table ORDER BY id DESC; "
      );

      while( $row = $query -> fetch_object() ) {
        $resultSet[] = $row;
      }

      return $resultSet;
    }

    # Devuelve registro por ID
    public function getById( $id ) {
      $resultSet = '';        # Inicializa

      $query = $this -> db -> query(
        "SELECT * FROM  $this->table WHERE id = $id; "
      );

      if( $row = $query -> fetch_object() ) {
        $resultSet = $row;
      }

      return $resultSet;
    }

    # Devuelve registro por campo y su valor
    public function getBy( $field, $value ) {
      $resultSet = array();        # Inicializa

      $query = $this -> db -> query(
        "SELECT * FROM $this->table WHERE $field = '$value'; "
      );

      while( $row = $query -> fetch_object() ) {
        $resultSet[] = $row;
      }

      return $resultSet;
    }

    # Elimina registro por ID
    public function deleteById( $id ) {

      $query = $this -> db -> query(
        "DELETE FROM $this->table WHERE id = $id; "
      );

      return $query;
    }

    # Elimina registro por campo y su valor
    public function deleteBy( $field, $value ) {
      $query = $this -> db -> query(
        "DELETE FROM $this->table WHERE $field = '$value'; "
      );

      return $query;
    }

    # Ejecuta una consulta personalizada
    public function executeSql( $query ) {
      $resultSet = false;

      $query = $this -> db -> query( $query );

      if( $query == true ) {
        if( $query -> num_rows > 1 ) {

          while( $row = $query -> fetch_object() ) {
              $resultSet[] = $row;
          }

        }
        else if( $query == 1 ) {

          if( $row = $query -> fetch_object() ) {
              $resultSet = $row;
          }

        }
      }
      else {
        $resultSet = false;
      }

      return $resultSet;
    }

    /* NOTA: Se pueden crear todo timpo de métodos que nos ayuden a hacer
             operaciones con la Base de Datos con la Entidad */

  }
?>
