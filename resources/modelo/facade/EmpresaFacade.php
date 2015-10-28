<?php

require_once FACADE."AbstractFacade.php";   
require_once ENTITY."Empresa.php";   
class EmpresaFacade extends AbstractFacade 
{
    protected function getNameRelationEntity() {
        return "Empresa";
    }

//    public function getObj($fila) 
//    {
//        return new Empresa($fila[0],$fila[1],$fila[2],$fila[3],$fila[4]);
//    }
}