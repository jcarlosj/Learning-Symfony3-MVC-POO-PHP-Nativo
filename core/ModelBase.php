<?php
  class ModelBase extends EntityBase {
    # Atributos
    private $table;

    # Constructor
    public function __construct( $table ) {
      $this -> table = (string) $table;
      parent :: __construct( $table );
    }

    # Obtener todos los registros a través de la Clase Padre EntityBase
    public function getAll() {
      return parent :: getAll();
    }

    # Obtener registro por ID a través de la Clase Padre EntityBase
    public function getById( $id ) {
      return parent :: getById( $id );
    }

    # Obtener registro por Campo y Valor a través de la Clase Padre EntityBase
    public function getBy( $field, $value ) {
      return parent :: getBy( $field, $value );
    }

    # Obtener eliminar registro por ID a través de la Clase Padre EntityBase
    public function deleteById( $id ) {
      return parent :: deleteById( $id );
    }

    # Obtener eliminar registros por Campos y Valor a través de la Clase Padre EntityBase
    public function deleteBy( $field, $value ) {
      return parent :: deleteBy( $field, $value );
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
        else if( $query -> num_rows == 1 ) {

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

    /* NOTA: Se pueden crear todo tipo de métodos que nos ayuden a hacer
             operaciones con la Base de Datos con la Entidad */

  }
?>
