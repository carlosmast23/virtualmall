<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Estructura
 *
 * @author Carlos
 */
require_once RAIZ."resources/modelo/conexion/Columna.php";
class Estructura {
    private $columnas;
    private $nameTable;
    
    function __construct($nameTable) 
    {
        $array = array();
        $this->nameTable=$nameTable;
    }    
    
    //agrega una colomuna a la estructura
    public function addColumna($obj)
    {
        $this->array[]=$obj;
    }
    
    public function getPK()
    {
         $listaPk=array();
         //foreach ( $this->array as $key => $value )
         foreach ( $this->array as $key =>$columna )
         {
           // echo $columna;
            if($columna->getTipo()=="pk")
            {
                $listaPk[]=$columna;                
            }
         }
         return $listaPk;
    }
    
    public function getColumnas()
    {
        return $this->array;        
    }    
    
    public function getNameTable()
    {
        return $this->nameTable;
    }
}
