<?php
$PrecioTotal = 0;
$CantidadLapices = 0;
$CantidadLapices = $_GET["CantidadLapices"];
if ($CantidadLapices > 1000) {
    $PrecioTotal = $CantidadLapices * 150;
} 
else {
    $PrecioTotal = $CantidadLapices * 250;
}
echo("El precio total de los lapices es: " . $PrecioTotal)
?>


