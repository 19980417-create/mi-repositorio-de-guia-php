<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];

echo "<center>";
echo "<h2>Datos ingresados</h2>";

echo "<h1>Nombre:  $nombre</h1>";
echo "<br>";
echo "<h2>Correo:  $correo</h2>"; 
echo "<br>";
echo "<h3>Ciudad:$ciudad</h3>";

echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio25.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
echo "</center>";


?>
