<?php

$cadena="hola<[php asdasdasdasd [> como estas";
$inicio=strpos($cadena,"<[php");
$fin=strpos($cadena,"[>");
//echo $inicio." - ".($fin-$inicio);
//echo intval($inicio);
//$inicio=5;
//$fin=5;
$tamanio=  strlen($cadena)-$fin;
//echo $tamanio;
//echo $inicio;
$cadenaInicio =substr($cadena,0,$inicio);

$cadenaFin =substr($cadena,$fin+2);
//echo $cadenaFin;

$cadenaFinal=$cadenaInicio.$cadenaFin;
echo $cadenaFinal;