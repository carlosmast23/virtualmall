<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/Config.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();    
?>

<?php

include_once CONTROLADOR_ACCION;
include_once SERVICIOS."UsuarioServicio.php";
include_once ENTITY."Usuario.php";
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrarUsuario
 *
 * @author Carlos
 */
class RegistrarUsuario extends ControladorAccion
{
    public function ejecutar() 
    {
        $usuario=new Usuario();
        $usuario->llenarConArray($_REQUEST);
        $servicio=new UsuarioServicio();
        $servicio->grabar($usuario);  
        $this->mensaje("Usuario Creado",
                "El usuario fue creado exitosamente , en unos momentos le redireccionamos para que ingreso con sus datos", 
                $this->getPathAbsoluta("login.php"), 
                5000, 
                true, 
                1);
    }

    public function getRedireccion() {
        
    }

    public function setPermisos() {
         $this->permisos=array(
          RegistrarUsuario::$todos,
        );
    }

//put your code here
}

(new RegistrarUsuario())->renderizar();
