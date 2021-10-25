<?php
/*Crea una página PHP que calcule e imprima el área y el perímetro de un rectángulo. 
Para ello, define dos variables para los lados que reciban un número aleatorio entre 1 y 12 (función rand) 
y haga los cálculos necesarios. */
$ladoA = rand(1, 12);
$ladoB = rand(1, 12);
$area = $ladoA * $ladoB;
$perimetro = 2 * $ladoA + 2 * $ladoB;
echo "Los valores generados para el rectangulo es primer lado $ladoA segundo lado $ladoB</br>";
echo "El area del rectangulo es $area y su perimetro es $perimetro";
