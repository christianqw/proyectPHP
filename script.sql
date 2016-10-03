CREATE TABLE empresas(
 id tinyint(3) unsigned NOT null AUTO_INCREMENT,
 nombre varchar(50) NOT null,
 PRIMARY KEY (id)
)

CREATE TABLE empleados (
  id mediumint(8) unsigned NOT null AUTO_INCREMENT,
	idEmpresa tinyint(3) unsigned NOT null,
  nombre varchar (50) not null,
	apellido varchar (50) NOT null,
  edad tinyint(10) unsigned NOT null,
  PRIMARY KEY (id),
	FOREIGN KEY (idEmpresa)
        REFERENCES empresas(id)
        ON DELETE CASCADE
);

CREATE TABLE programadores (
  idEmpleado mediumint(8) unsigned NOT null,
	lenguaje ENUM('PHP', 'NET', 'Python'),
  PRIMARY KEY (idEmpleado),
  FOREIGN KEY (idEmpleado)
        REFERENCES empleados(id)
        ON DELETE CASCADE
);

CREATE TABLE disenadores (
  idEmpleado mediumint(8) unsigned NOT null,
	tipoD ENUM ('Grafico', 'Web'),
  PRIMARY KEY (idEmpleado),
  FOREIGN KEY (idEmpleado)
        REFERENCES empleados(id)
        ON DELETE CASCADE
);
