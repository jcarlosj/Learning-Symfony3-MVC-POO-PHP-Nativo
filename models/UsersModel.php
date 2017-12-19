<?php
class UsersModel extends ModelBase {
  # Atributos
  private $table;

  # Constructor
  public function __construct() {
    $this -> table = 'usuarios';
    parent :: __construct( $this -> table );
    echo 'Hola desde UsersModel';
  }

  public function getUserByEmail( $email ) {
    $query = "SELECT id, nombres, apellidos, email FROM $this->table WHERE email LIKE '$email'; ";
    $user = $this -> executeSql( $query );

    return $user;
  }

}
?>
