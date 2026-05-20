<?php

$numero = $_POST["numero"];
$suma = 0;

echo "<center>";
echo "<h1>Suma desde 1 hasta $numero</h1>";
echo "<br>";

for ($i = 1; $i <= $numero; $i++) {
    $suma = $suma + $i;
}

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<h2>Resultado: $suma</h2>";

echo "<br><br>";

echo "<br><br>";
echo "<a href='Ejercicio20.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";

?>