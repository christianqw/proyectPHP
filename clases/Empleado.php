<?php
  require_once 'Connection.php';

 abstract class Empleado {
	// tabla de la DB
	const TABLA = 'empleados';

	//Atributos de la clase
	protected $id;
  protected $idEmpresa;
  protected $nombre;
  protected $apellido;
  protected $edad;

  //constructor
  protected function __construct($nombre, $apellido, $edad, $idEmpresa, $id=null) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->idEmpresa = $idEmpresa;
    $this->id = $id;
  }

  public static function getListaEmpleados(){
    $connection = new connection(); //genero la conexion
    $query = $connection->prepare('SELECT nombre, apellido, edad FROM ' . self::TABLA . ' ORDER BY nombre'); //genero la consulta
    $query->execute(); //ejecuto la consulta
    $rows = $query->fetchAll(); //obtengo la lista de elementos encontrados en un arreglo
    $connection = null;//cerrar la conexion

    return $rows;
  }

  protected function agregarEmpleado(){
    echo "</br> Por guardar " .  $this->nombre."-". $this->apellido . "-" . $this->edad . "</br>" ;
    $connection = new connection();
    $query = $connection->prepare('INSERT INTO ' . self::TABLA . ' (nombre, apellido, edad, idEmpresa) VALUES(:nombre, :apellido, :edad, :idEmpresa)');
    $query->bindParam(':nombre', $this->nombre);
    $query->bindParam(':apellido', $this->apellido);
    $query->bindParam(':edad', $this->edad);
    $query->bindParam(':idEmpresa', $this->idEmpresa);
    $query->execute();
    echo "string --- ". $connection->lastInsertId();
    $this->id = $connection->lastInsertId();
    $connection = null;
  }

  //gets and sets...
  public function getNombre(){
    return $this->nombre;
  }

  public function getId(){
    return $this->id;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function getIdEmpresa(){
    return $this->idEmpresa;
  }

  public function getEdad(){
    return $this->edad;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;
  }

  public function setEdad($edad){
    $this->edad = $edad;
  }

  public function setIdEmpresa($idEmpresa){
    $this->idEmpresa = $idEmpresa;
  }

 }

?>
