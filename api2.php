<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    
    // Operadores Arigmaticos
    $num1 = (int) 16;
    $num2 = (int) 7;

    // Suma
    $suma = $num1 + $num2;
    // Resta
    $resta = $num1 - $num2;
    // División
    $division = $num1 / $num2;

    // Multiplicación
    $multiplicacion = $num1 * $num2;

    // Módulo
    $modulo = $num1 % $num2;

    // Negación
    $negacion = $num1 *- $num2;

    echo "<br>La suma de $num1 + $num2 = $suma<br>";
    echo "La Resta de $num1 - $num2 = $resta<br>";
    echo "La División de $num1 / $num2 = $division<br>"
    echo "La Multiplicación de $num1 * $num2 = $multiplicacion<br>"
    echo "El módulo de la división de $num1 % $num2 = $modulo<br>"
    echo "La Negación de $num1 *- $num2 = $negacion<br>"

    $a = $num1;
    $num1;
    echo "El Pre-incremento (++$) de $a = ++$a<br>"
    echo "El Post-incremento ($++) de $a++ = $a<br>"
    echo "El Pre-incremento (--$) de $a = --$a<br>"
    echo "El Post-incremento ($--) de $a-- = $a<br>"

?>