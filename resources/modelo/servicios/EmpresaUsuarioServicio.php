<?php
require_once FACADE."EmpresaUsuarioFacade.php";  
require_once ENTITY."EmpresaUsuario.php";
require_once FACADE."EmpresaFacade.php";
require_once FACADE."UsuarioFacade.php";
require_once SERVICIOS."AbstractServicio.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresaUsuarioServicio
 *
 * @author Carlos
 */
class EmpresaUsuarioServicio extends AbstractServicio
{
    private $empresaUsuarioFacade;
    
    function __construct() {
        $this->empresaUsuarioFacade=new EmpresaUsuarioFacade();                
    }
    
    public function obtenerTodosLosDatos()
    {
        $array=array();
        $consulta=$this->empresaUsuarioFacade->consultaTabla();
        return $consulta;
    }
        


}
