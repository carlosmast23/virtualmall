<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/VariablesGlobales.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();
?>

<?php

//require_once './resources/VariablesGlobales.php';
require_once RAIZ.CONTROLADOR."ControladorSet.php";
//echo RAIZ."resources/controlador/ControladorSet.php";

class Controlador extends ControladorSet
{
    public function buscarValores() {
        
    }

    public function setDiccionario() {
        $this->diccionario= array(
           "Homepage"=>"remplazo",         
        );
    }

    public function getPagina() {
        return "indexVista.php";
    }

    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

}
(new Controlador())->renderizar();

?>
