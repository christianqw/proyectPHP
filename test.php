<?php

  require_once 'clases/Empresa.php';
  require_once 'clases/Connection.php';

  // XX-- Mostrar todas las Empresas Cargadas --XX
  echo "<hr /> Empresas: </br></br>";
  $listaDeEmpresas = Empresa::getListaDeEmpresas();

  if (count($listaDeEmpresas) > 0):
    foreach ($listaDeEmpresas as $item):
      echo " -- " . $item['nombre'];
    endforeach;
  else:
      echo "No hay Empresas dentro de la Base de Datos";
  endif;

  echo "<hr /> Empleados: ";

  // XX-- Listar todas las Empleados de una Empresa --XX

  $nombreEmpresa = "SUMMA";
  $summa = Empresa::getEmpresa($nombreEmpresa); // Seleccionar la empresa con la que se va a trabajar...

  if ($summa)://de ser correcto el nombre de la empresa...

    //Listar los empleados de la Empresa seleccionada...
    $listaDeEmpleados = $summa->getListaDeEmpleados();
    if (count($listaDeEmpleados) > 0):
      foreach ($listaDeEmpleados as $item):
        echo " > {$item['nombre']} {$item['apellido']} - Edad: {$item['edad']} </br>";
      endforeach;
    else:
        echo "No hay Empleados cargados para la empresa {$nombreEmpresa}";
    endif;
  else:
    echo "La empresa {$nombreEmpresa} no está cargada en la DB";
  endif;




?>
