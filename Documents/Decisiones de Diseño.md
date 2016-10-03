#Análisis del enunciado:

## Una sola empresa, múltiples empleados.
Por enunciado se interpreta que siempre se administra la misma empresa, en la cual se tienen 2 tipos distintos de empleados.

-- Relacion "1 a n" entre Empresa y Empleado.
Como se interpreta que existe una única empresa se descarta la relacion "n a n".

##Dos tipos de empleados.
 No se detecta funcionalidad específica entre los 2 tipos de empleados.
 Alternativas para implementar la solución:

1.-  [Alternativa a implementar]
 - Información en común en una tabla Empleados.
 - Cada tipo de empleado posee su propia tabla con la información específica del tipo.
 - Los valores de la tabla tipo (opciones), se implementan con un ENUM listando los posibles valores a tomar.

>Una tabla por tipo de empleado, facilita a futuro el agregar información en los tipos
>definidos y el agregar más tipos de empleados.
>Es posible que un empleado sea de más de un tipo.

2.-
 - Toda la información en una única tabla, en la que se tiene que especificar el tipo y otro campo.

>Más dificil de modificar a futuro.
>Más simple de implementar la solución si sólo es esa información.
>Descartada para poder implementar el concepto de herencia entre clases. 
