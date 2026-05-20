<?php

$celsius = $_POST["celsius"];
$farenheit = $celsius * 1.8;

echo "<center>";
echo "<h1>Los $celsius grados Celsius equivalen a:</h1>";
echo "<br>";
echo "<h1>$farenheit grados Fahrenheit</h1>";


echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio15.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>