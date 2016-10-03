<?php
 //Ante de definir la clase incluimos la clase padre Vehiculo.
 require_once 'Empleado.php';
 require_once 'Connection.php';

 class Disenador extends Empleado {

   // tabla de la DB
   const TABLA = 'disenadores';

   //Atributos de la clase
   private $tipoD;

    public function __construct($nombre, $apellido, $edad, $tipoD, $idEmpresa, $id=null) {
       parent::__construct($nombre, $apellido, $edad, $idEmpresa);
       $this->tipoD=$tipoD;
    }

    public function agregarEmpleado(){

      parent::agregarEmpleado();
      //para cargar la tabla Empleados y asignar el id a la variable local

      $connection = new connection();
      $query = $connection->prepare('INSERT INTO ' . self::TABLA . ' (idEmpleado, tipoD) VALUES(:id, :tipoD)');
      $query->bindParam(':id', $this->id);
      $query->bindParam(':tipoD', $this->tipoD);
      $query->execute();
      $connection = null;
    }

    public function getTipoD(){
      return $this->edad;
    }

    public function setTipoD($tipoD){
      $this->tipoD = $tipoD;
    }

 }
?>
