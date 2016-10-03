<?php

  require_once 'clases/Empresa.php';
  require_once 'clases/Connection.php';
  require_once 'clases/Disenador.php';

  //$nombreEmpresa = "Glo"; //Error si no está definida la empresa.

  $nombreEmpresa = "SUMMA";

  $summa = Empresa::getEmpresa($nombreEmpresa);

  if (!$summa):
      echo "La empresa {$nombreEmpresa} no está cargada en la DB";
  endif;
/*
  //Empleados cargados en la DB...
  //--Programadores
  $summa->agregarProgramador("Maria", "Leoz", 25, "PHP");
  $summa->agregarProgramador("Juan", "Rubi", 30, "NET");
  $summa->agregarProgramador("Matias", "Materola", 19, "Python");
  //--Diseñadpres
  $summa->agregarDisenador("Sebastian", "Gonzales", 31, "Web");
  $summa->agregarDisenador("Luciano", "Aguero", 28, "Web");
*/

  echo "</br> Descomentar lineas para insetar los elementos en la DB </br>";

?>
