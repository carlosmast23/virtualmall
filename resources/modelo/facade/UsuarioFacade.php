<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioFacade
 *
 * @author Carlos
 */
require_once RAIZ."resources/modelo/facade/AbstractFacade.php";   
require_once RAIZ."resources/modelo/vo/Usuario.php";   
class UsuarioFacade extends AbstractFacade 
{
    function __construct() 
    {
        parent::__construct();
    }

    protected function getEstructBlank() 
    {
        return (new Usuario("",""))->getEstructura();
    }
    
    

}
