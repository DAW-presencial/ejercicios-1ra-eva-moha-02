<?php 

$array = array(9,8,7,6,5,4,3,2,1); //Array que vamos a ordenar

function burbuja(&$array){ //funcion que contiene el metodo de ordenacion por burbuja
    $temp = 0; // declaramos una variable auxiliar
    for($i = 0;$i<(sizeof($array));$i++){ //bucle principal que se utilizara para recorrer el array
        for($j = 0;$j<((sizeof($array)-1));$j++){ // bucle que nos permitira comparar los numeros y moverlos de posicion
            if($array[$j]>$array[$j+1]){ // segun si se cumpla la condicion se llevara a cabo un swap
                $temp = $array[$j]; //asignamos a la variable temporal el numero que estamos valorando
                $array[$j] = $array[$j+1];//llevamos a cabo el swap
                $array[$j+1] = $temp;
            }
        }
    }
}
//IMPRIMIR POR PANTALLA
print_r('El array desordenado es: ');
print_r($array);
burbuja($array);
print_r('El array ordenado: ');
print_r($array);
?>