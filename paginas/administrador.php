<!DOCTYPE html>
<html lang="es">
  <head>
    <title> EjerPHP </title>
  </head>
  <body>
    <h1> <?php echo $_REQUEST['nombreEmpresa']; ?> </h1>
    <h2>Administrador de Empleados</h2>
    <hr />
    <p>&nbsp;</p>
  
    <button type="button" name="listarEmpleados"><a href="paginas/administrador.php?nombreEmpresa=<?php echo$item['nombre'] ?>">Administrar Empleados</a></button>
    </div>
  </body>
</html>
