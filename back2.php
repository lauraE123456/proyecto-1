<?php
$numero1=0;
$numero2=0;
$signo="texto";
$resultado=0;
$numero1= $_GET["numero1"];
$signo= $_GET["signo"];
$numero2= $_GET["numero2"];
if($signo=="+"){
    $resultado = $numero1 + $numero2;
}
else{
    if($signo=="-"){
        $resultado = $numero1 - $numero2;
    }
    else{
        if($signo=="*"){
            $resultado = $numero1 * $numero2;
        }
        else{
            if($signo=="/"){
                $resultado = $numero1 / $numero2;
            }
            else{
                echo("Error en el signo");
            }
        }
    }
}
echo("el resultado es : ".$resultado)
?>