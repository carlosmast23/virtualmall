<?php

require_once RAIZ.'resources/Config.php';

abstract class  ControladorSet 
{
    //variables globales opcioneles para las opciones
    protected static $todos="todos";
    protected static $admin="admin";
    //protected $conexion;
    protected $configuracion;
    protected $diccionario;
    protected $permisos; //array que almacena los permisos de los usuarios para cada pagina
    //protected $pagina;
    
    abstract function buscarValores();
    abstract function setDiccionario();
    abstract function getPagina();
    abstract function setPermisos();
    
    function __construct() 
    {
        //$this->pagina=$pagina;
        $this->setDiccionario();
        $this->buscarValores();
        $this->setPermisos();
        $this->configuracion=Config::getInstance();
        //session_start();
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


    //realiza el remplazo de las variables
    public function renderizar()
    {
        
        $pagina=  file_get_contents($this->getPagina());        
        $inicio=strpos($pagina,"<?php");
        $fin=strpos($pagina,"?>");
        
        
        
        if($this->verificarSession())
        {
            foreach ($this->diccionario as $key => $value)
            {
                $pagina=  str_replace("[$key]", $value, $pagina);            
            }   
            print $pagina;
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
    
    protected function getConfiguracion()
    {
        return $this->configuracion;
    }
    
}

?>
