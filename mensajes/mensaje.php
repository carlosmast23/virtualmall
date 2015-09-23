<?php
require_once '../resources/VariablesGlobales.php';
require_once RAIZ."resources/controlador/ControladorSet.php";

class Controlador extends ControladorSet
{
    function __construct() 
    {
        parent::__construct();
    }

    
    public function buscarValores() {
        
        $this->diccionario["titulo"]=$_GET['titulo'];
        $this->diccionario["mensaje"]=$_GET['mensaje'];
        $this->diccionario["tiempo"]=$_GET['tiempo'];
        $this->diccionario["pagina"]=$_GET['redireccion'];
        $this->diccionario["tipo"]=$_GET['boton'];
        $this->diccionario["img"]=$_GET['img'];
       //$this->diccionario["activar"]=$_GET['activar'];
        
    }

    public function getPagina() {
        return 'mensajeVista.php';
    }

    public function setDiccionario() 
    {
         $this->diccionario= array(
           "titulo"=>"",         
           "mensaje"=>"",     
           "tiempo"=>"", 
           "tipo"=>"",
        );
    }

    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

};
(new Controlador())->renderizar();
?>