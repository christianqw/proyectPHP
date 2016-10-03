#Analisis del enunciado:

## Una sola empresa, multiples empleados.
por enunciado se interpreta que siempre se administra la misma empresa, en la cual se tiene 2 tipos distintos de empleados.

-- Relacion "1 a n" entre Empresa y Empleado.
Como se interpreta que existe una unica empresa se desacarta la relacion "n a n".

##Dos tipos de empleados.
 No se detecta funcionalidad especifica entre los 2 tipos de empleados.
 Alternativas para implementar la solucion:

1.-  [Alternativa a implementar]
 - Informacion en comun en una tabla Empleados.
 - Cada tipo de empleado posee su propia tabla con la informacion especifica del tipo.
 - Los valores de la tabla tipo (opciones), se implementan con un ENUM listando los posibles valores a tomar.

>Una tabla por tipo de empleado, facilita a futuro el agregar informacion en los tipos
>definidos y el agregar mas tipos de empleados.
>Es posible que un empleado sea de mas de un tipo.

2.-
 - Toda la informacion en una unica tabla, en la que se tiene que especificar el tipo y otro campo.

>Mas dificil de modificar a futuro.
>Mas simple de implementar la solucion si solo es esa información.
>Descartada para poder implementar el concepto de herencia entre clases. 
