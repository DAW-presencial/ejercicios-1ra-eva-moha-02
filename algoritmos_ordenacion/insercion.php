<?php 
$array = array(9,8,7,6,5,4,3,2,1);  //Array que vamos a ordenar
function insercion(&$array){ //funcion que contiene el metodo de ordenacion por insercion directa
    for($i = 1;$i<(sizeof($array));$i++){ //bucle principal que se utilizara para recorrer el array
        $temp = $array[$i]; //assignamos a la variable temporal la posicion del array
        $j = $i-1; //asignamos a la variable auxiliar el valor de la posicion inferior del puntero
        while($j>= 0 and $array[$j]> $temp){ //bucle que permite comparar y en su defecto ir moviendo a la izquierda los numeros inferiores
            $array[$j+1] = $array[$j];
            $j--;
        }
        $array[$j+1] = $temp;
    }
}
//IMPRIMIR POR PANTALLA
print_r('El array desordenado es: ');
print_r($array);
insercion($array);
print_r('El array ordenado: ');
print_r($array);
?>