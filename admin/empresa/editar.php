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
        $obj=$servicio->obtenerPorClave("nombre",$_REQUEST['id'])[0];
        $this->diccionario['nombre']=$obj->getNombre();
        $this->diccionario['direccion']=$obj->getDireccion();
        $this->diccionario['telefonos']=$obj->getTelefonos();
        $this->diccionario['email']=$obj->getEmail();
        $this->diccionario['descripcion']=$obj->getDescripcion();
        
    }

    public function setDiccionario() {
        $this->diccionario= array(
           "nombre"=>"",
           "direccion"=>"",
           "telefonos"=>"",
           "email"=>"",
           "descripcion"=>"",
        );
    }

    public function getPagina() {
        return "editarVista.php";
    }

    
    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

}
(new Controlador())->renderizar();

?>