<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/Config.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();
    
?>

<?php

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
        //$servicio->login($usuario,$clave);
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
