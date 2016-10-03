<?php
  require_once 'Connection.php';
  require_once 'Empleado.php';
  require_once 'Programador.php';


 class Empresa {
	// tabla de la DB
	const TABLA = 'empresas';

	//Atributos de la clase
	private $id;
  private $nombre;

  //constructor
  public function __construct($nombre, $id=null) {
    $this->nombre = $nombre;
    $this->id = $id;
  }

  //gets and sets...
  public function getNombre(){
    return $this->nombre;
  }

  public function getId(){
    return $this->id;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public static function getListaEmpresas(){
    $connection = new connection(); //genero la conexion
    $query = $connection->prepare('SELECT nombre FROM ' . self::TABLA . ' ORDER BY nombre'); //genero la consulta
    $query->execute(); //ejecuto la consulta
    $rows = $query->fetchAll(); //obtengo la lista de elementos encontrados en un arreglo
    $connection = null;//cerrar la conexion

    return $rows;
  }

  public static function getEmpresa($nombreEmpresa){
    $connection = new connection();
    $query = $connection->prepare('SELECT * FROM ' . self::TABLA . ' WHERE nombre = :nombre'); //genero la consulta
    $query->bindParam(':nombre', $nombreEmpresa);
    $query->execute();
    $row = $query->fetch();
    $connection = null;
    if ($row){
      return new self ($nombreEmpresa, $row['id']);
    } else {
      return null;
    }
  }

  public function agregarProgramador($nombre, $apellido, $edad, $leng){
    echo "string" .  $this->id ."</br>";
    $empleado = new Programador($nombre, $apellido, $edad, $leng, $this->id);
    echo "generado";
    $empleado->agregarEmpleado();
    echo "guardado";
  }

  public function listarEmpleados(){
    $connection = new connection();
    $query = $connection->prepare('SELECT nombre, apellido, edad FROM ' . Empleado::TABLA . ' WHERE idEmpresa = :idEmpresa');
    $query->bindParam(':idEmpresa', $this->id); //todos los empleados de la empresa.
    $query->execute();
    $rows = $query->fetchAll();
    $connection = null;

    return $rows;
  }

  public function getEmpleado($idEmpleado){
    //no verifica que el empleado sea de la empresa en cuestion,
    //por eso se utiliza el metodo estatido definido en la propia clase.

    return Empleado::getEmpleado($idEmpleado);
    //si no encuentra empleado retorna null
    //la vista tiene que interpretar que hacer
    //return Empleado::getEmpleado($idEmpleado, $this->id);
    }

  public function getPromedioEdad(){

    $connection = new connection();

    $query = $connection->prepare('SELECT AVG(edad) FROM ' . Empleado::TABLA . ' WHERE idEmpresa = :idEmpresa');
    $query->bindParam(':id', $this->id);
    $query->execute();
    $row = $query->fetch();
    $connection = null;

    return $row;
  }
 }

?>
