<?php

  require_once 'clases/Empresa.php';
  require_once 'clases/Connection.php';

  $listaEmpresas = Empresa::getListaEmpresas();
  echo "<hr /> Empresas: </br></br>";

  if (count($listaEmpresas) > 0):
    foreach ($listaEmpresas as $item):
      echo " -- " . $item['nombre'];
    endforeach;
  else:
      echo "No hay Empresas dentro de la Base de Datos";
  endif;




  echo "<hr /> Empleados: <hr /> ";

?>
