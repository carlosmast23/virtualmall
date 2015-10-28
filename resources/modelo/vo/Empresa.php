<?php

require_once ABSTRACTDB;
require_once ESTRUCTURA;   
require_once COLUMNA;

class Empresa extends AbstractDb
{
    private $nombre;
    private $direccion;
    private $telefonos;
    private $email;
    private $descripcion;
    
    public $usuarios;
    
    function __construct($nombre=null,$direccion=null,$telefono=null,$email=null,$descripcion=null) 
    {
        parent::__construct();
        $this->nombre=$nombre;
        $this->direccion=$direccion;
        $this->telefonos=$telefono;
        $this->email=$email;
        $this->descripcion=$descripcion;
    }    

 

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefonos() {
        return $this->telefonos;
    }

    function getEmail() {
        return $this->email;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefonos($telefonos) {
        $this->telefonos = $telefonos;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function setEstructura() 
    {
        $this->estructura->setNameTable("empresa");
        $this->estructura->addColumna(new Columna("nombre",$this->nombre,"pk"));
        $this->estructura->addColumna(new Columna("direccion",$this->direccion,"0"));
        $this->estructura->addColumna(new Columna("telefono",$this->telefonos,"0"));
        $this->estructura->addColumna(new Columna("email",$this->email,"0"));
        $this->estructura->addColumna(new Columna("descripcion",$this->descripcion,"0"));
        
        $this->estructura->addArray(new ArrayDb(
                "empresa_fk", 
                $this->nombre, 
                "EmpresaUsuarioFacade", 
                "usuario_fk", 
                $this->usuarios));
    }

}

