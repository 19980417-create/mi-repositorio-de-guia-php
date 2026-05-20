<?php
$numero1 = $_POST["numero1"];
echo "<center>";
if ($numero1 % 2 == 0) {

    echo "<h1>$numero1 es  par  </h1>";
} else  {
    echo "<h1>$numero1 es impar </h1>";
}
 echo"</center";

 echo "<style>
body{
    background-color: gray;
}
</style>";

 echo "<br><br>";
echo "<a href='Ejercicio9.html'>";
echo "<button>Volver al formulario</button>";
echo "</a>";

echo "<br><br>";
echo "<a href='index.php'>";
echo "<button>Volver al index</button>";
echo "</a>";

?>