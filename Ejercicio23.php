<?php

$precio = $_POST['cantidad'];
$iva = 0.13;
$monto_iva = $precio * $iva;
$total = $precio + $monto_iva;

echo "<center>";
echo "<h2>Resultado</h2>";
echo "Precio original: $" . $precio . "<br>";
echo "IVA (13%): $" . $monto_iva . "<br>";
echo "Total a pagar: $" . $total;

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio23.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>