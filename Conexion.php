<?php
  class Conexion extends PDO{
      private $host = '127.0.0.1';
      private $usuario = 'root';
      private $nameBD = 'cruddavid';
      private $password = '';
      public function __construct(){
      try {
        $ConexionBD  = "mysql:host=$this->host;dbname=$this->nameBD";
        parent::__construct( $ConexionBD , $this->usuario, $this->password);
      } catch (PDOException $e) {
          echo "Error de conexión: " . $e->getMessage();
        }
      }
   
    }


