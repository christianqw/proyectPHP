<?php
 class Connection extends PDO {

   private $tipoDB = 'mysql';
   private $host = 'localhost';
   private $nombreDB = 'ejerphp';
   private $usuario = 'root';
   private $contrasena = '';

   public function __construct() {
      //Sobreescribo el m�todo constructor de la clase PDO.
      try{
         parent::__construct("{$this->tipoDB}:host={$this->host};dbname={$this->nombreDB}", $this->usuario, $this->contrasena);
      }catch(PDOException $e){
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: </br>' . $e->getMessage();
         exit;
      }
   }
 }
?>
