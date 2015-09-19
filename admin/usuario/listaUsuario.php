<?php
require_once '../../resources/VariablesGlobales.php';
require_once RAIZ."resources/controlador/ControladorSet.php";

class Controlador extends ControladorSet
{
    public function buscarValores() 
    {
        
        $this->diccionario["botones"]["valor"][]="nuevo";
        $this->diccionario["botones"]["valor"][]="editar";
        $this->diccionario["botones"]["valor"][]="eliminar";
        
        $this->diccionario["botones"]["activar"][]="disabled";
        $this->diccionario["botones"]["activar"][]="";
        $this->diccionario["botones"]["activar"][]="disabled";
        
        
        $this->diccionario["columna"]["fila1"][]=1;
        $this->diccionario["columna"]["fila1"][]=2;
        $this->diccionario["columna"]["fila1"][]=3;
        
        $this->diccionario["columna"]["fila2"][]="a";
        $this->diccionario["columna"]["fila2"][]="b";
        $this->diccionario["columna"]["fila2"][]="c";
        
        //remplazar valores de los botones
        
        
    }

    public function setDiccionario() {
        $this->diccionario= array(
           "Homepage"=>"remplazo",         
            "botones"=>array("activar"=>array(),"valor"=>array()),
//            "columna"=>array("fila1"=>array(),"fila2"=>array()),
          
        );
    }

    public function getPagina() {
        return "listaUsuarioVista.php";
    }

    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

}
(new Controlador())->renderizar();

?>
