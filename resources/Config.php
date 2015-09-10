<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author Carlos
 */
class Config 
{
        private static $instancia;
        
    	public $host = 'localhost';
	public $user = 'root';
	public $password = '1234';
	public $db = 'virtualmalldb';
        public $sitename='http://localhost/virtualmall/';
        
        public static function getInstance()
        {
           if (  !self::$instancia instanceof self)
           {
              self::$instancia = new self;
           }
           return self::$instancia;
        }
}
