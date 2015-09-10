<?php
require_once "../VariablesGlobales.php";
require_once RAIZ."resources/controlador/ControladorSet.php";

class Controlador extends ControladorSet
{
    function __construct() {
        parent::__construct();
    }

    
    public function buscarValores() {
        
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

}
session_start();
$_SESSION["session"]="super";

(new Controlador())->renderizar();