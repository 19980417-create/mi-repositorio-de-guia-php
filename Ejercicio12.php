<?php

$altura = $_POST["altura"];
$base = $_POST["base"];
$area = $altura * $base;

echo "<center>";
echo "<h1>El area del rectangulo es:</h1>";
echo "<br>";
echo "<h1>$area</h1>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio12.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>