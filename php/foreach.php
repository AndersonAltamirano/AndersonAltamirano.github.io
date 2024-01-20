<?php

/* array predefinido */
$arrayp = ["elemento1", "elemento2", "elemento3"];

/* bucle foreach */
foreach($arrayp as $var){
    echo $var;
}
/* para un array asociativo personalizado */
$arrayper = ["clave1" => "elementoas1 ", "clave2" => "elemento2as", "clave3" => "elemento3as"];

foreach($arrayper as $asoci=> $claveselemento){
    echo $claveselemento;
    /* tambien podría imprimir las claves reemplazando $claveselemento con $asoci */
}
?>