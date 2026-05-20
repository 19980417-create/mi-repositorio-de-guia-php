<?php

$numero = $_POST["numero"];

echo "<center>";
echo "<h1>Tabla del $numero</h1>";
echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "<h3>$numero x $i = $resultado</h3>";
}

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";

echo "<br><br>";
echo "<a href='Ejercicio19.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";

?>