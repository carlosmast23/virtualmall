<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Carlos
 */
require_once RAIZ."resources/modelo/conexion/AbstractDb.php";   
require_once RAIZ."resources/modelo/conexion/Estructura.php";   
require_once RAIZ."resources/modelo/conexion/Columna.php";
class Usuario extends AbstractDb 
{
    private $nick;
    private $clave;
    
    function __construct($nick, $clave) 
    {
        $this->nick = $nick;
        $this->clave = $clave;
    }         

    function getNick() 
    {
        return $this->nick;
    }

    function getClave() 
    {
        return $this->clave;
    }

    function setNick($nick) 
    {
        $this->nick = $nick;
    }

    function setClave($clave) 
    {
        $this->clave = $clave;
    }

    public function __toString() 
    {
        return $this->nick ."  -> ".$this->clave;
    }

    public function getEstructura() 
    {
        
        $estructura=new Estructura("usuario");
        $estructura->addColumna(new Columna("nick",$this->nick,"pk"));
        $estructura->addColumna(new Columna("clave",$this->clave,"0"));
        return $estructura;
        
    }

    public function getEstado() 
    {
        return $this->copia;
    }

    public function saveEstado() 
    {
        $this->copia=clone($this);
        
    }

}
