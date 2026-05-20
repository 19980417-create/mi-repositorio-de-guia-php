<?php

$metros = $_POST["metros"];
$centimetros = $metros * 100;

echo "<center>";
echo "<h1>Los $metros metros equivalen a:</h1>";
echo "<br>";
echo "<h1>$centimetros centimetros</h1>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio14.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";
?>