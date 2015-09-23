<?php

require_once '../VariablesGlobales.php';
require_once RAIZ."resources/controlador/ControladorAccion.php";  
//require_once RAIZ."resources/controlador/Controlador.php";  
//require_once RAIZ."resources/modelo/vo/Usuario.php";    

class TestAccion extends ControladorAccion
{
    public function ejecutar() {
        echo "todo bien";
        $this->mensaje("Bienvenido al sistema","El sistema te redireccionara en un momento ...",$this->getPathAbsoluta("index.php"),false,true,2);
    }

    public function getRedireccion() 
    {
        
    }

    public function setPermisos() {
        $this->permisos=array(
        self::$todos,
        );
    }

//put your code here
}
(new TestAccion())->renderizar();