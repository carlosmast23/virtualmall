<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/Config.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();    
?>


<?php

require_once CONTROLADOR_SET;

class Controlador extends ControladorSet
{
    public function buscarValores() 
    {
        $this->diccionario['calculo']="valor remplazado";
    }

    public function setDiccionario() {
        $this->diccionario= array(
           "Homepage"=>"remplazo",
           "calculo"=>" ",
        );
    }

    public function getPagina() {
        return "nuevaVista.php";
    }

    
    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

}
(new Controlador())->renderizar();

?>