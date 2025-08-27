<?php
header('Content-Type: text/plain');
echo "EJERCICIO 8: FUNCIONES Y ARREGLOS\n\n";
echo "--- Funciones ---\n";
function saludar($nom) {
    return "Hola, " . $nom;
}
echo saludar("Carlos") . "\n";
function sumar($a, $b) {
    return $a + $b;
}
$res = sumar(5, 3);
echo "5 + 3 = " . $res . "\n\n";
echo "--- Arreglos ---";
$frutas = ["Manzana", "Banana", "Naranja"];
echo "Arreglo de índice numérico:\n";
print_r($frutas);
echo "El segundo elemento es: " . $frutas[1] . "\n\n";
$persona = [
    "nombre" => "Ana",
    "edad" => 28,
    "ciudad" => "Madrid"
];
echo "Arreglo asociativo:\n";
print_r($persona);
echo "La edad de " . $persona["nombre"] . " es " . $persona["edad"] . " años.\n\n";
echo "Recorriendo el arreglo de frutas con foreach:\n";
foreach ($frutas as $fruta) {
    echo "- " . $fruta . "\n";
}
echo "\nRecorriendo el arreglo de persona con foreach:\n";
foreach ($persona as $cla => $val) {
    echo "- " . $cla . ": " . $val . "\n";
}
?>