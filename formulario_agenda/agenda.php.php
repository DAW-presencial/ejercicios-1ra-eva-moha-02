<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>

<form method="post" action="index.php">
   

    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <br>
    <br>
    <label>Telefono:</label>
    <input type="number" name="numero" >

    <input type="hidden" name="agenda" value="<?php echo $hiddenAgenda; ?>">

    <input type="submit" value="Submit">
    <br>
    <br>
</form>

</body>
</html>

<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
       
        $hiddenAgenda = $_POST['agenda']; //recibe el string que contiene el  array que guarda la agenda
        $explodedArray = explode(',', $hiddenAgenda); // convierte la agenda en array 
       
        $nombre = $_POST['nombre'];
        $numero = $_POST['numero'];
 
        $agenda = array(); //array que será la agenda

        foreach ($explodedArray as $pair) { // permite guardar en array associativo la agenda previamente recuperada
            list($key, $value) = explode(':', $pair, 2);
            $agenda[$key] = $value;
        }

        if( !empty($numero)) { //si el numero no esta vacio se asigna el numero al nombre o directamente se crea un nuevo contacto

            $agenda[$nombre] = $numero;

        }else{ // si el campo del numero esta vacio se elimina el contacto correspondiente al numero introducido

            unset ($agenda [$nombre]);
        }
        foreach ($agenda as $key => $value) { //bucle que permite imprimir el array de los contactos
            echo "Nombre: {$key}; Tel: {$value}";
        } 

        $hiddenAgenda = implode(',', $agenda); //guarda la agenda de vuelta en el campo hidden para recuperarla posteriormente después del submit
    }

?>