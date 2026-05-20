<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$resultado = $numero1 / $numero2;
 echo "<h1>La División de los dos numeros es: $resultado </h1>";

 
 echo "<style>
body{
    background-color: gray;
}
</style>";

echo "<br><br>";
echo "<a href='Ejercicio2.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";


echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";
?>