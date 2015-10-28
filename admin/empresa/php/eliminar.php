<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/Config.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();    
?>

<?php

include_once CONTROLADOR_ACCION;
include_once ENTITY."Empresa.php";
include_once SERVICIOS."EmpresaServicio.php";

class Controlador extends ControladorAccion
{
    
    public function ejecutar() 
    {
        //echo $_REQUEST[1];
        $servicioEmpresa=new EmpresaServicio();
        $servicioEmpresa->eliminar($_REQUEST['id']);
        
        $this->mensaje("Empresa Eliminada",
        "Los datos fueron eliminados exitosamente , en unos momentos le redireccionamos al menu de empresas", 
        $this->getPathAbsoluta("/admin/empresa/lista.php"), 
        5000, 
        true, 
        1);
    }

    public function getRedireccion() 
    {
        
    }

    public function setPermisos() 
    {
          $this->permisos=array(
              Controlador::$todos,
        );
    }

}

(new Controlador())->ejecutar();