<?php


echo "Bienvenido a calcumamadora php \n";
echo "Este programa calcula el valor de una expresion matematica \n";

echo "Que operacion quiere realizar?\n";
echo "1. Suma\n";
echo "2. Resta\n";
echo "3. Multiplicacion\n";
echo "4. Division\n";
#se leen las entradas
$op = readline();
$valor1 = readline("Ingrese el primer valor");
$valor2 = readline("Ingrese el segundo valor");
if ($op==1){
    echo "La suma es: " . $valor1 + $valor2;
}
else if ($op== 2){
    echo "La resta es: " . $valor1 - $valor2;
}
else if ($op== 3){
    echo "La multiplicacion es: " . $valor1 * $valor2;
}
else if ($op== 4){
    echo "La division es: " . $valor1 / $valor2;
}
else{
    echo "La opcion no existe";
}