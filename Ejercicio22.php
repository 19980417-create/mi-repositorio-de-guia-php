<?php

$dolares = $_POST["cantidad"];
$convertir = 0.92;
$euros = $dolares * $convertir;

echo "<center>";
echo "<h1>El resultado de convertir los $$dolares a euros es: €$euros</h1> ";

echo "<style>
body{
    background-color: gray;
}
</style>";


echo "<br><br>";
echo "<a href='Ejercicio22.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>