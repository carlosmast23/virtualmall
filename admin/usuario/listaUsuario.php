<?php
require_once '../../resources/VariablesGlobales.php';
require_once RAIZ."resources/controlador/ControladorSet.php";

class Controlador extends ControladorSet
{
    public function buscarValores() 
    {
        
//        $this->diccionario["botones"]["valor"][]="nuevo";
//        $this->diccionario["botones"]["valor"][]="editar";
//        $this->diccionario["botones"]["valor"][]="eliminar";
//        
//        $this->diccionario["botones"]["activar"][]="disabled";
//        $this->diccionario["botones"]["activar"][]="";
//        $this->diccionario["botones"]["activar"][]="disabled";
//        
//        
//        $this->diccionario["columna"]["fila1"][]=1;
//        $this->diccionario["columna"]["fila1"][]=2;
//        $this->diccionario["columna"]["fila1"][]=3;
//        
//        $this->diccionario["columna"]["fila2"][]="a";
//        $this->diccionario["columna"]["fila2"][]="b";
//        $this->diccionario["columna"]["fila2"][]="c";
//        
//        
//        $this->diccionario["columna"]["btn"][0]["activar"]="disabled";
//        $this->diccionario["columna"]["btn"][0]["activar"]="";
//        $this->diccionario["columna"]["btn"][1]["activar"]="disabled";
//        $this->diccionario["columna"]["btn"][1]["activar"]="";
//        $this->diccionario["columna"]["btn"][2]["activar"]="disabled";
//        $this->diccionario["columna"]["btn"][2]["activar"]="";
//        
//        $this->diccionario["columna"]["btn"][0]["valor"]="valor1";
//        $this->diccionario["columna"]["btn"][0]["valor"]="valor2";
//        $this->diccionario["columna"]["btn"][1]["valor"]="valor3";
//        $this->diccionario["columna"]["btn"][1]["valor"]="valor4";
//        $this->diccionario["columna"]["btn"][2]["valor"]="valor5";
//        $this->diccionario["columna"]["btn"][2]["valor"]="valor6";


        $this->diccionario["columna"]["btn"][1]["valor"][0]="editado";
        
        //remplazar valores de los botones

    }

    public function setDiccionario() {
        $this->diccionario= array(
        "columna"=>array(
            "fila1"=>array(1,2,3),
            "fila2"=>array('a','b','c'),
            "btn"=>array(
                array("activar"=>array("true","true"),
                      "valor"=>array("b1","b2")),
                array("activar"=>array("true","true"),
                      "valor"=>array("b3","b4")),
                array("activar"=>array("true","true"),
                      "valor"=>array("b5","b6")),)));
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
