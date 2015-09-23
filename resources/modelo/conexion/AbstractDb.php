<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AbstractDb
 *
 * @author Carlos
 */
//clase que me permite vinvular las clases con una sola estructura
abstract class AbstractDb 
{
    abstract public function getEstructura();
    protected $copia; //variable que va a tener una copia del objeto en un determinado tiempo
    abstract public function saveEstado();
    abstract public function getEstado();
    //abstract public function getPk(); //obtener la clave principa;
    
    //funcion que me permite llenar automaticamente con el nombre de los arrays desde el formulario
    public function llenarConArray($array)
    {
       
        foreach ($array as $key => $valor)
        {
              //echo $key ." => ".$valor;
            //echo "$key </ br>";
            if (property_exists(get_class($this),$key)) 
            {
                //self::$key=$valor;
                $setter = 'set' . ucfirst($key);
                $this->$setter($valor);  
                echo $valor;
            }
            
        } 
      //  return new self();
    }
}
