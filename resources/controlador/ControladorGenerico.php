<?php

abstract class ControladorGenerico {
    // protected $mensaje;
     //variables globales opcioneles para las opciones
     protected static $todos="todos";
     protected static $admin="admin";
    
     protected $configuracion;
     protected $permisos; //array que almacena los permisos de los usuarios para cada pagina
     //protected $redireccion; //pagina para redireccionar;
     
     // function setPermisos(); //ingresar los permisos de loa pagina
     //abstract function ejecutar(); //funcion que ejecutar las acciones necesarias
     //abstract function getRedireccion(); //funcion que obtiene la pagina para redireccion
                  
     function __construct() 
     {
        $this->setPermisos();
        $this->configuracion=Config::getInstance();
       // $this->mensaje="hola mundo";
     }

     
     protected function verificarSession()
    {
        if(isset($_SESSION["session"]))
        {
            $correcto=false;
            foreach ($this->permisos as $valor)
            {
                echo $_SESSION["session"];
                if($_SESSION["session"]==$valor)
                {
                    //echo "encontrado ...";
                    $correcto=true;
                }
            }
            return $correcto;
        }
        else
        {
            foreach ($this->permisos as $valor)
            {
                if("todos"==$valor)
                {
                    return true;
                }
            }
            return false;
            
        }
        
        return false;
    }
    
    public function getConfiguracion()
    {
        return $this->configuracion;
    }
    
    public  function direccionar($url)
    {
        $direccion = 'Location:';
        $direccion = $direccion . $this->configuracion->siteName . $url;
        //$direccion=  $this->configuracion->$sitename;
        header($direccion);
    }
    
    public function mensaje($titulo, $mensaje,$redireccion,$tiempo,$boton,$imagen)
    {
        //controlar las imagenes
        $htmlImagen;
        switch ($imagen)
        {
            case 1:$htmlImagen="mensaje.png";
                    break;
            
            case 2:$htmlImagen="error.png";
                    break;
            
        }
        
        //controlar el boton
        $htmlBoton="";
        if($boton)
        {
            $htmlBoton="button";
        }
        else
        {
            $htmlBoton="hidden";            
        }
        
        //$htmlRedireccion="";
        
        //integer
        if(gettype($redireccion)=="boolean")
        {
            $redireccion="";
        }
        
        $direccion = 'Location:';
        $direccion = $direccion . $this->configuracion->siteName 
                ."mensajes/mensaje.php?"
                . "titulo=$titulo"
                . "&mensaje=$mensaje"
                . "&tiempo=$tiempo"
                . "&boton=$htmlBoton"
                . "&img=$htmlImagen"
                . "&redireccion=$redireccion";
        //$direccion=  $this->configuracion->$sitename;
        header($direccion);
    }
    
    public function getPathAbsoluta($url)
    {
        return $this->configuracion->siteName . $url;
    }
}
