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
require_once RAIZ."resources/modelo/conexion/ArrayDb.php";
class Usuario extends AbstractDb 
{    
    private $nick;
    private $clave;
    private $nombres;
    private $fechaNacimiento;
    private $sexo;
    private $email;
    
    /*
     * Array que contiene las empresas vinculadas
     */
    private $empresas;
    
    
    function __construct($nick=null, $clave=null,$nombres=null,$fechaNacimiento=null,$sexo=null,$email=null) 
    {
            parent::__construct();
            $this->nick = $nick;
            $this->clave = $clave;
            $this->nombres=$nombres;
            $this->fechaNacimiento=$fechaNacimiento;
            $this->sexo=$sexo;
            $this->email=$email;
           // $this->empresas=array();
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
    
    function getNombres() {
        return $this->nombres;
    }

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEmail() {
        return $this->email;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getEmpresas() {
        return $this->empresas;
    }

        
    public function __toString() 
    {
        return $this->nick ."  -> ".$this->clave;
    }

    
    public function encryptHash()
    {
        $this->clave=password_hash($this->clave, PASSWORD_DEFAULT);
    }

    public function setEstructura() {
        $this->estructura->setNameTable("usuario");
        $this->estructura->addColumna(new Columna("nick",$this->nick,"pk"));
        $this->estructura->addColumna(new Columna("clave",$this->clave,"0"));
        $this->estructura->addColumna(new Columna("nombres",$this->nombres,"0"));
        $this->estructura->addColumna(new Columna("fecha_nacimiento",$this->fechaNacimiento,"0"));
        $this->estructura->addColumna(new Columna("sexo",$this->sexo,"0"));
        $this->estructura->addColumna(new Columna("email",$this->email,"0"));
        
        $this->estructura->addArray(new ArrayDb(
                "usuario_fk", //clave por la que va a filtrar 
                $this->nick,  //valor de la clave a filtrat
                "EmpresaUsuarioFacade",  //clase que indica donde va a realizar el filtro
                "empresa_fk",  //clave por la cual voy a obtner el arreglo de 
                $this->empresas));
    }

}
