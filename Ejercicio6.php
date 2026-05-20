<?php
$edad = $_POST["edad"];
$nombre = $_POST["nombre"];
echo "<h1>Tu nombre es:  $nombre </h1>";
echo "<h1>Tienes $edad años</h1>";
echo "<br>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio1.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";

?>