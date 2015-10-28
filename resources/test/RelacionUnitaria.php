<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/Config.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();    
?>


<?php

require_once SERVICIOS."EmpresaUsuarioServicio.php";
require_once SERVICIOS."UsuarioServicio.php";

require_once ENTITY."Empresa.php";
require_once ENTITY."Usuario.php";

$servicio=new UsuarioServicio();
$array=$servicio->obtenerTodosLosDatos();
//echo count($array);
for($i=0;$i<count($array);$i++)
{
    echo $array[$i]."</br>";
    $array2=$array[$i]->getEmpresas();
    //echo count($array2);
    
    for ($j=0;$j<count($array2);$j++)
    {
        echo "------->".$array2[$j]->getNombre()."</br>";
           // echo count($array2[$j]->usuarios)."</br>";
            for($k=0;$k<count($array2[$j]->usuarios);$k++)
            {
                echo " ------------> ".$array2[$j]->usuarios[$k]."</br>";
            }
    }
}
