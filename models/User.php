<?php
  class User extends EntityBase {
    # Atributos
    private $id,
            $nombres,
            $apellidos,
            $email,
            $clave,
            $table;

    # Constructor
    public function __construct( $db ) {
      $this -> table = 'usuarios';
      parent :: __construct( $this -> table, $db );
    }
    # Getters
    public function getId() {
      return $this -> id;
    }
    public function getNombres() {
      return $this -> nombres;
    }
    public function getApellidos() {
      return $this -> apellidos;
    }
    public function getEmail() {
      return $this -> email;
    }
    public function getClave() {
      return $this -> clave;
    }
    # Setters
    public function setId( $id ) {
      $this -> id = $id;
    }
    public function setNombres( $nombres ) {
      $this -> nombres = $nombres;
    }
    public function setApellidos( $apellidos ) {
      $this -> apellidos = $apellidos;
    }
    public function setEmail( $email ) {
      $this -> email = $email;
    }
    public function setClave( $clave ) {
      $this -> clave = $clave;
    }
    # Otras acciones
    public function save() {
      $query = "INSERT INTO usuarios ( id, nombres, apellidos, email, clave )
                     VALUES (
                       NULL,
                       '" .$this -> nombres. "',
                       '" .$this -> apellidos. "',
                       '" .$this -> email. "',
                       '" .$this -> clave. "'
                     ); ";
       # TEST: echo $query; exit;
                       
       $save = $this -> db -> query( $query );
       return $save;
    }
  }
?>
