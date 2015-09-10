<?php

class Columna {
    private $nombre;
    private $valor;
    private $tipo; //fk , pk ,0=normal
    
    function __construct($nombre, $valor, $tipo) {
        $this->nombre = $nombre;
        $this->valor = $valor;
        $this->tipo = $tipo;
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getValor() {
        return $this->valor;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }



}
