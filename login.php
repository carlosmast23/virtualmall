<?php

require_once './resources/VariablesGlobales.php';
require_once RAIZ."resources/controlador/ControladorSet.php";

class Controlador extends ControladorSet
{
    public function buscarValores() 
    {
        $this->diccionario['calculo']="valor remplazado";
    }

    public function setDiccionario() {
        $this->diccionario= array(
           "Homepage"=>"remplazo",
           "calculo"=>" ",
        );
    }

    public function getPagina() {
        return "loginVista.php";
    }

    
    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

}
(new Controlador())->renderizar();

?>