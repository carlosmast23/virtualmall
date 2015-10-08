<?php

require_once "../VariablesGlobales.php";
require_once RAIZ."resources/controlador/ControladorAccion.php";

class Controlador extends ControladorAccion
{
    function __construct() {
        parent::__construct();
    }

   
    public function setDiccionario() {
        $this->diccionario= array(
           "Homepage"=>"remplazo",         
        );
    }

    public function getPagina() {
        return "http://localhost/virtualmall/index.html";
    }

    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }   

function getRedireccion() {

}

    public function ejecutar() 
    {
        echo $this->getVarSession("nombre");
    }

}

(new Controlador())->renderizar();