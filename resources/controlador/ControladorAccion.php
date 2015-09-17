<?php
require_once RAIZ.'resources/Config.php';

abstract class ControladorAccion {
    
    //variables globales opcioneles para las opciones
    protected static $todos="todos";
    protected static $admin="admin";
    
     protected $configuracion;
     protected $permisos; //array que almacena los permisos de los usuarios para cada pagina
     //protected $redireccion; //pagina para redireccionar;
     
     abstract function setPermisos(); //ingresar los permisos de loa pagina
     abstract function ejecutar(); //funcion que ejecutar las acciones necesarias
     abstract function getRedireccion(); //funcion que obtiene la pagina para redireccion
     
     function __construct() {
         $this->configuracion=Config::getInstance();
         $this->setPermisos();
     }
     
    private function verificarSession()
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
     
    public function renderizar()
    {
              
        if($this->verificarSession())
        {
            $this->ejecutar();
            //$direccion = 'Location:';
            //$direccion = $direccion . $this->configuracion->sitename . $this->getRedireccion();
            //header($direccion);
        }
        else
        {
             //echo 
             $direccion='Location:';
             $direccion=$direccion.$this->configuracion->sitename."index.html";
             //$direccion=  $this->configuracion->$sitename;
             header($direccion);
             //echo "redireccionando ...";
        }                
        
    }    
    
    public  function direccionar($url)
    {
        $direccion = 'Location:';
        $direccion = $direccion . $this->configuracion->sitename . $url;
        //$direccion=  $this->configuracion->$sitename;
        header($direccion);
    }

}
