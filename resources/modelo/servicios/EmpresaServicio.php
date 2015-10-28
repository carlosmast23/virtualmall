<?php

require_once FACADE."EmpresaFacade.php";  
require_once ENTITY."Empresa.php";
require_once SERVICIOS."AbstractServicio.php";

class EmpresaServicio extends AbstractServicio
{
    private $empresaFacade;
    
    function __construct() {
        $this->empresaFacade=new EmpresaFacade();                
    }
    
    public function grabar($obj)
    {
        $this->empresaFacade->insert($obj);
    }
    
    public function editar($obj)
    {
        $this->empresaFacade->editar($obj);
    }
    
    public function eliminar($valor)
    {
        $this->empresaFacade->delete($valor);
    }
    
    public function obtenerPorClave($clave,$valor)
    {
        $array=array();
        $consulta=$this->empresaFacade->getFindId($clave, $valor);
        return parent::arrayToObject($consulta);
    }
    
    public function obtenerTodosLosDatos()
    {
        $array=array();
        $consulta=$this->empresaFacade->consultaTabla();
        return parent::arrayToObject($consulta);
    }

   

}
