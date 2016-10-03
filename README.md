# proyectPHP
 - Dentro de la carpeta Clases se encuentran las clases PHP que definen los objetos pedidos.
 -

## Ambiente
El proyecto fue desarrolado utilizando XAMPP para Windows10 (32bits) Version 7.0.9 / PHP 7.0.9

## Persistencia de información

Configuracion de phpMyAdmin
 - Base de datos: "ejerphp"
 - Usuario: "root" (por defecto)
 - Contraseña: "" ('vacio', por defecto)

 >Configuracion especificada en el archivo "connection.php" dentro de la carpeta Clases

### Script de generacion de tablas

Se definen cuatro tablas, la estructura de base de datos puede observarse en el archivo "script.sql"
en donde se especifican los scripts de generacion correspondientes.

## Testing

El archivo "testCarga.php" se encarga de insetar un conjunto de 5 empleados.

>Para poder utilizar los 2 archivos de testeo provistos, previamente tiene que
>insertarse de forma manual una empresa de nombre SUMMA.

El archivo "test.php" muestra:
 - La lista de empresas cargadas.
 - La lista de empleados cargados de la empresa SUMMA.
 - El valor de la edad promedio de los empleados de la empresa SUMMA
