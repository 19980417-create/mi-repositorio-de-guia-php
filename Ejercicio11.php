<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "<center>";
echo "<h1>Tu promedio es: $promedio</h1>";
if ($promedio > 6) {
    echo "<h2>Estas aprobado felicidades</h2>";
} else {
    echo "No aprobaste";
}

echo "<style>
body{
    background-color: gray;
}
</style>";

 echo "<br><br>";
echo "<a href='Ejercicio11.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";


?>