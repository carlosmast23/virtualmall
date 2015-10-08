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
        private $siteName='http://localhost/';
        private $subSite='virtualmall/';
        
        public function getSitePath()
        {
           return $this->siteName.$this->subSite; 
        }
        
        public function getSubSite()
        {
            return $this->subSite;
        }
        
        public static function getInstance()
        {
           if (  !self::$instancia instanceof self)
           {
              self::$instancia = new self;
           }
           return self::$instancia;
        }
}
