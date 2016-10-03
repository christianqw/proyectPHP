<?php
 //Ante de definir la clase incluimos la clase padre Vehiculo.
 require_once 'Empleado.php';
 require_once 'Connection.php';

 class Programador extends Empleado {

   // tabla de la DB
   const TABLA = 'programadores';

   //Atributos de la clase
   private $lenguaje;

    public function __construct($nombre, $apellido, $edad, $idEmpresa, $leng, $id=null) {
       parent::__construct($nombre, $apellido, $edad, $idEmpresa);
       $this->lenguaje=$leng;
    }

    public function agregarEmpleado(){

      parent::agregarEmpleado();
      //para cargar la tabla Empleados y asignar el id a la variable local

      $connection = new connection();
      $query = $connection->prepare('INSERT INTO ' . self::TABLA . ' (idEmpleado,lenguaje) VALUES(:id, :leng)');
      $query->bindParam(':id', $this->id);
      $query->bindParam(':leng', $this->lenguaje);
      $query->execute();
      $connection = null;
    }

    public function getlenguaje(){
      return $this->edad;
    }

    public function setlenguaje($leng){
      $this->lenguaje = $leng;
    }

    /*

    // si tiene parametros?

    public function agregarEmpleado($nombre, $apellido, $edad, $idEmpresa, $leng){

      $myId = parent::agregarEmpleado($nombre,$apellido, $edad, $idEmpresa);
      $connection = new connection();
      $query = $connection->prepare('INSERT INTO ' . self::TABLA . ' (idEmpleado,lenguaje) VALUES(LAST_INSERT_ID(), :leng)');
      $query->bindParam(':leng', $leng);
      $query->execute();
      $rows = $query->fetchAll();
      $connection = null;
    }
    */
 }
?>
