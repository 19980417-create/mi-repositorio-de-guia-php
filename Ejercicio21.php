<?php
$palabra = $_POST["palabra"];
$cantidad = strlen($palabra);

echo "<h1>La palabra:$palabra, tiene una cantidad de $cantidad letras</h1>";
echo "<br>";
echo "<br><br>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio21.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";

?>