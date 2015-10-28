<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioServicio
 *
 * @author Carlos
 */
require_once RAIZ."resources/modelo/facade/UsuarioFacade.php";  
require_once RAIZ."resources/modelo/vo/Usuario.php";

class UsuarioServicio extends AbstractServicio
{
    private $usuarioFacade;
    
    function __construct() {
        $this->usuarioFacade=new UsuarioFacade();
       
    }
    
    public function login($nick, $clave)
    {
        $usuario=  $this->getPorClavePrincipal($nick)[0];
        if(!(is_null($usuario)))
        {
            //echo $usuario;
            //echo $usuario->getClave()." -> ".password_hash($clave,PASSWORD_DEFAULT);
            if(password_verify($clave,$usuario->getClave()))
            {
                return true;                
            }
        }
        else
        {
            return false;
        }
        
    }
    
    public function editar($obj)
    {
        $this->usuarioFacade->editar($obj);        
    }
    
    public function grabar($obj)
    {
        $obj->encryptHash();
        $this->usuarioFacade->insert($obj);
    }
    
    public function obtenerPorClave($clave,$valor)
    {
        $array=array();
        $consulta=$this->usuarioFacade->getFindId($clave, $valor);
        $fila=mysql_fetch_array($consulta);
        $i=0;
        do
        {
            $array[$i]=new Usuario($fila[0],$fila[1]);
            $i++;
        }while($fila=mysql_fetch_array($consulta));
        
        return $array;        
    }
    
    public function getPorClavePrincipal($valor)
    {
        $array=array();
        $consulta=$this->usuarioFacade->getFindPrimaryKey($valor);
        $fila=mysql_fetch_array($consulta);
        $i=0;
        do
        {
            $array[$i]=new Usuario($fila[0],$fila[1]);
            $i++;
        }while($fila=mysql_fetch_array($consulta));
        
        return $array;        
    }
    
    public function eliminar($valor)
    {
        $this->usuarioFacade->delete($valor);
    }
    
    
    public function obtenerTodosLosDatos()
    {
        $consulta=$this->usuarioFacade->consultaTabla();
        return $consulta;
    }

}
