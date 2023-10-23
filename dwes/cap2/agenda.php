<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
       
        $agenda = array(); //array que será la agenda
        
        if (!empty($_POST['agenda'])) { //Comprueba si el campo agenda esta vacio tras enviarlo desde el POST
            
            $agenda = json_decode($_POST['agenda'], true); //pasa el contenido de la agenda desde JSON
            $nombre = $_POST['nombre'];
            $numero = $_POST['numero'];
        }        
        if( !empty($numero)) { //si el numero no esta vacio se asigna el numero al nombre o directamente se crea un nuevo contacto

            $agenda[$nombre] = $numero;

        }else{ // si el campo del numero esta vacio se elimina el contacto correspondiente al numero introducido

            unset ($agenda [$nombre]);
        }
        //guarda en formato JSON la agenda de vuelta en el campo hidden para recuperarla posteriormente después del submit
        $hiddenAgenda = htmlentities(json_encode(($agenda)));
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
</head>
<body>

    <form method="post" action="agenda.php">
   

        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <br>
        <label>Telefono:</label>
        <input type="number" name="numero" >

        <input type="hidden" name="agenda" value="<?= $hiddenAgenda ?>">

        <input type="submit" value="Submit">
        <br>
        <br>

        <ul>
            <?php 
           foreach ($agenda as $key => $value) { //bucle que permite imprimir el array de los contactos
            echo "Nombre: {$key}; Tel: {$value}<br>";
            } 
            ?>
        </ul>

    </form>
</body>
</html>
