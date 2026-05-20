<?php
$monto = $_POST["monto"];
$descuento = $monto * 0.10;
$total = $monto - $descuento;
 echo "<center>";
if ($monto > 44) {
 echo "Felicidades has obtenido un descuento del 10%";
 echo "<br>";
 echo "Monto sin descuento: $monto";
 echo "<br>";
 echo "Total a pagar: $total";
 echo "<br>";
} elseif ($monto < 44) { 
    echo "Tu monto no aplica para el descuento tu tal a pagar es:$monto";
}

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio17.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>