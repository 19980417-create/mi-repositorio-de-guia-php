<?php
$nombre = $_POST["nombre"];
$horas = $_POST["horas"];
$pago = $_POST["pago"];
 $pagar = $horas * $pago;


echo "<center>";
echo "<h1>Datos del Empleado:</h1>";
echo "<br>";
echo "<h2>Nombre: $nombre</h2>";
echo "<br>";
echo "<h2>Horas trabajadas: $horas</h2>";
echo "<br>";
echo "<h2>Pago por hora: $pago</h2>";
echo "<br>";
echo "<h2>Total a pagar al empleado: $$pagar</h2>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio16.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>