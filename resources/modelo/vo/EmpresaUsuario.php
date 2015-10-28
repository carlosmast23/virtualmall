<?php

require_once ABSTRACTDB;   
require_once ESTRUCTURA;   
require_once COLUMNA;

class EmpresaUsuario extends AbstractDb
{
    private $id;
    private $empresa;
    private $usuario;
    
    function __construct($id=null, $empresa=null, $usuario=null) {
        parent::__construct();
        $this->id = $id;
        $this->empresa = $empresa;
        $this->usuario = $usuario;
    }

    
   
    function getId() {
        return $this->id;
    }
    
    /*
     * return Empresa;
     */
    
    function getEmpresa() {
        return $this->empresa;
    }

    function getUsuario() {
        return $this->usuario;
    }

    public function __toString() {
        return "[".$this->getId()." , ".$this->getEmpresa()->getNombre()." , ".$this->getUsuario()->getNick()."]";
    }

    public function setEstructura() {
        $this->estructura->setNameTable("empresa_usuario");
        $this->estructura->addColumna(new Columna("idempresa_usuario",$this->id,"pk"));
        $this->estructura->addColumna(new Columna("empresa_fk",$this->empresa,"fk","Empresa","EmpresaFacade"));
        $this->estructura->addColumna(new Columna("usuario_fk",$this->usuario,"fk","Usuario","UsuarioFacade"));  
    }

}