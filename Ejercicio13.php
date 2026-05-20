<?php

$lado = $_POST["lado"];
$perimetro = $lado * 4;

echo "<center>";
echo "<h1>El perimetro del cuadrado es:</h1>";
echo "<br>";
echo "<h1>$perimetro</h1>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio13.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>