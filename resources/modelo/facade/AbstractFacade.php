<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractFacade
 *
 * @author Carlos
 */
require_once RAIZ."resources/modelo/conexion/Conexion.php";   
require_once RAIZ."resources/modelo/conexion/Estructura.php";
abstract class AbstractFacade 
{
    abstract protected function getEstructBlank(); //devuelve una estructura en blanco del objeto con el que esta trabajando
    
    //abstract protected function getColumnas();
    protected $conexion;
    
    function __construct() 
    {
        $this->conexion=  Conexion::getInstance();
    }

    
    public function consultaTabla()
    {
        $estructura=  $this->getEstructBlank();
        $query="SELECT * FROM ".$estructura->getNameTable();
        $consulta=mysql_query($query,$this->conexion->getConexion()) or die(mysql_error());
        return $consulta;

    }
    
    public function getFindId($clave,$valor)
    {
        $query="SELECT * FROM ".$this->getNameTable()." WHERE $clave='$valor'";
        $consulta=mysql_query($query,$this->conexion->getConexion()) or die(mysql_error());
        return $consulta;     
    }
    
    public function getFindPrimaryKey($valor)
    {
        $vector=$this->getEstructBlank();
        $columnas=$vector->getPK();
        //echo count($columnas);
        $query="SELECT * FROM ".$vector->getNameTable()." WHERE ".$columnas[0]->getNombre()."='$valor'";
        $consulta=mysql_query($query,$this->conexion->getConexion()) or die(mysql_error());
        return $consulta;     
    }
    
    //optimizar para borrar con todas las claves primarias
    public function delete($valor)
    {
       $vector=$this->getEstructBlank();
       $columas=$vector->getPK();
       $query="DELETE FROM ".$vector->getNameTable()." WHERE ".$columas[0]->getNombre()."='".$valor."';";
       $consulta=$this->conexion->ejecutar($query);
       //$consulta=mysql_query($query,$this->conexion->getConexion()) or die(mysql_error());
       return $consulta;
    }
    
    public function editar($obj)
    {
       $vector=$obj->getEstructura();
       $columnas=$vector->getColumnas();
       
       $consulta="UPDATE ".$vector->getNameTable()." SET ";
       //$vector=$entidad->getDatos();
       
       for ($i=0;$i<count($columnas);$i++)
       {
           $c=$columnas[$i];
            if($i==count($columnas)-1)
               $consulta=$consulta.$c->getNombre()."='".$c->getValor()."'";    
           else
               $consulta=$consulta.$c->getNombre()."='".$c->getValor()."'".",";    
           
       }
      $vector=$obj->getEstado()->getEstructura();
      $vector=$vector->getPK();
            
      $consulta=$consulta." WHERE ".$vector[0]->getNombre()."='".$vector[0]->getValor()."';";
    // echo $consulta;            
       $Result1 = $this->conexion->ejecutar($consulta);
       
       return $Result1;   
        
    }
    
    public function insert($obj)
    {
       
       $vector=$obj->getEstructura();
       $columnas=$vector->getColumnas();
       $consulta="INSERT INTO ".$vector->getNameTable()."(";
       
       for ($i=0;$i<count($columnas);$i++)
       {
           $c=$columnas[$i];
            if($i==count($columnas)-1)
               $consulta=$consulta.$c->getNombre();       
           else
               $consulta=$consulta.$c->getNombre().",";   
           
       }
       
       $consulta=$consulta.") VALUES (";
       
       for ($i=0;$i<count($columnas);$i++)
       {
            $c=$columnas[$i];
            if($i==count($columnas)-1)
               $consulta=$consulta."'".$c->getValor()."'";    
            else
               $consulta=$consulta."'".$c->getValor()."',";   
           
       }
       
       $consulta=$consulta.");";
       echo $consulta;
       $Result1 = $this->conexion->ejecutar($consulta);
       //$Result1 = mysql_query($consulta,$this->conexion->getConexion()) or die(mysql_error());
       
       return $Result1;              
    }
}
