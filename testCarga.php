<?php

  require_once 'clases/Empresa.php';
  require_once 'clases/Connection.php';

  $nombreEmpresa = "SUMMA";

  $summa = Empresa::getEmpresa($nombreEmpresa);

  if (!$summa):
      echo "La empresa {$nombreEmpresa} no está cargada en la DB";
  endif;

  $summa->agregarProgramador("Maria", "Perez", 25, "PHP");

?>
