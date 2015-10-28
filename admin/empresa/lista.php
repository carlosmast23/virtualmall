<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/Config.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();    
?>


<?php

require_once CONTROLADOR_SET;
require_once SERVICIOS."EmpresaServicio.php";

class Controlador extends ControladorSet
{
    public function buscarValores() 
    {
        $servicio=new EmpresaServicio();
        $array=$servicio->obtenerTodosLosDatos();
        for($i=0; $i< count($array); $i++)
        {
            $this->diccionario['columna']['Nombre'][]=$array[$i]->getNombre();
            $this->diccionario['columna']['Direccion'][]=$array[$i]->getDireccion();
            $this->diccionario['columna']['Telefono'][]=$array[$i]->getTelefonos();
            $this->diccionario['columna']['Email'][]=$array[$i]->getEmail();
            $this->diccionario['columna']['id'][]=$array[$i]->getNombre();
        }        
        
    }

    public function setDiccionario() {
        $this->diccionario=array
        (
            "columna"=>array
            (
                "Nombre"=>array(),
                "Direccion"=>array(),
                "Telefono"=>array(),
                "Email"=>array(),
                "id"=>array(),
            )
        );
    }

    public function getPagina() {
        return "listaVista.php";
    }

    
    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

}
(new Controlador())->renderizar();

?>