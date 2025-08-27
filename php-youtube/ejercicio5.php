<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2: Método GET</title>
</head>
<body>

<h1>Pasa un dato por la URL</h1>

<a href="ejercicio2.php?producto=Laptop&precio=1200">Ver producto</a>

<?php
if (isset($_GET['prod']) && isset($_GET['prec'])) {
    $prod = $_GET['prod'];
    $prec = $_GET['prec'];

    echo "<h2>Información del Producto</h2>";
    echo "<p>Producto: " . $prod . "</p>";
    echo "<p>Precio: $" . $prec . "</p>";
}
?>

</body>
</html>