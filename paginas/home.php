<!DOCTYPE html>
<html lang="es">
  <head>
    <title> EjerPHP </title>

  </head>
  <body>
    <h1> Empresas: </h1>
    <hr />
    <p>&nbsp;</p>
    <?php if (count($listaEmpresas) > 0): ?>
    <div class="region-ListaEmpresas">
      <ul class="lista"><!-- BEGIN:ListarEmpresas -->
        <?php foreach ($listaEmpresas as $item): ?>
        <li>
          <span><?php echo $item['nombre']; ?></span>
          <button type="button" name="administrar"><a href="paginas/administrador.php?nombreEmpresa=<?php echo$item['nombre'] ?>">Administrar Empleados</a></button>
        </li>
        <?php endforeach; ?>
      </ul><!-- END:ListarEmpresas -->
      <?php else: ?>
        <p> No hay Empresas dentro de la Base de Datos</p>
      <?php endif; ?>
    </div>
  </body>
</html>
