<?php

$nombre = $_POST["nombre"];
$producto = $_POST["producto"];
$producto2 = $_POST["producto2"];
$cantidad = $_POST["cantidad"];
$cantidad2 = $_POST["cantidad2"];
$precio = $_POST["precio"];
$precio2 = $_POST["precio2"];
$subtotal = $precio * $cantidad;
$subtotal2 = $precio2 * $cantidad2;
$total = $subtotal + $subtotal2;

echo "<center>";
echo "<h1>Nombre del cliente: $nombre</h1>";
echo "Producto 1: $producto";
echo "<br>";
echo "Cantidad: $cantidad";
echo "<br>";
echo "Precio unitario del producto: $$precio";
echo "<br>";

echo "<hr>";

echo "Producto 2: $producto2";
echo "<br>";
echo "Cantidad: $cantidad2";
echo "<br>";
echo "Precio unitario: $$precio2";
echo "<br>";

echo "<hr>";

echo "Subtotal de $producto: $$subtotal";
echo "<br>";
echo "Subtotal de $producto2: $$subtotal2";
echo "<br>";
echo "Total a pagar: $$total";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio18.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";


?>