# DWES_formulario agenda
Practica de agenda que almacena contactos


## OBJETICO🎯

- Insertar contactos mediante formulario
- No utillizar coockies
- No utilizar sesiones
- Utilizar el tipo de input hidden
- Almacenar los contactos en un array asociativo

## TECHNOLOGIES 🛠

-PHP 🐘

## DESTACADO 🔂

Destacar el la codificacion en JSON que permite almacenar los datos y recuperarlos entre PHP y HTML:

- Aqui codificamos y guardamos la agenda(array) para almacenarlo en el input hidden
~~~

$hiddenAgenda = htmlentities(json_encode(($agenda)));
<input type="hidden" name="agenda" value="<?= $hiddenAgenda ?>">

~~~

- Aqui se descodifica el JSON que llega mediante el metodo POST
~~~

$agenda = json_decode($_POST['agenda'], true);

~~~







