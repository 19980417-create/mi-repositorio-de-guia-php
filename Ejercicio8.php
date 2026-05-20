<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
echo "<center>";
if ($numero1 < $numero2) {

    echo "<h1>$numero1 es menor que $numero2</h1>";
} elseif ($numero1 > $numero2){
    echo "<h1>$numero2 es menor que $numero1</h1>";
}
 echo"</center";

 echo "<style>
body{
    background-color: gray;
}
</style>";

 echo "<br><br>";
echo "<a href='Ejercicio8.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";

?>