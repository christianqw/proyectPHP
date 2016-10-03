<?php

    require_once 'clases/Empresa.php';

    $listaEmpresas = Empresa::getListaEmpresas();

    require_once 'paginas/home.php';

?>
