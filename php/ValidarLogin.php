<?php
require_once '../resources/VariablesGlobales.php';
require_once RAIZ."resources/controlador/ControladorAccion.php";
require_once RAIZ."resources/controlador/ControladorSet.php";
require_once RAIZ."resources/modelo/servicios/UsuarioServicio.php";

class ValidarLogin extends ControladorAccion 
{
    public function ejecutar() 
    {       
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        
        $servicio=new UsuarioServicio();
        if($servicio->login($usuario, $clave))
        {
            $this->direccionar("admin/index.php");
        }
        else
        {   
            $this->direccionar("loginVista.php");            
        }            
        
    }

    public function getRedireccion() 
    {
        return "admin/index.php";
    }

    public function setPermisos() 
    {
        $this->permisos=array(
            ValidarLogin::$todos,
        );
    }

//put your code here
}

(new ValidarLogin())->renderizar();
