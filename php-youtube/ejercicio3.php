<?php
header('Content-Type: text/plain');
echo "EJERCICIO 3: STRINGS Y CONCATENACIÓN\n\n";
$str1 = "Hola";
$str2 = 'Mundo';
$saludo = $str1 . " " . $str2;
echo "Concatenación con .: " . $saludo . "\n";
$saludo2 = "$str1 $str2";
echo "Concatenación con comillas dobles: " . $saludo2 . "\n";
$frase = "Este es un ";
$frase .= "string largo.";
echo "Concatenación con .=: " . $frase . "\n";
?>