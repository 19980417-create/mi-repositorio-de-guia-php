<?php

$edad = $_POST["edad"];
$años = $edad + 10;

echo "<center>";
echo "<h1>Tu edad dentro de 10 años sera : $años</h1>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio24.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>