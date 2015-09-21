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
            //cambio de las variables directas
            foreach ($this->diccionario as $key => $value)
            {
                if(gettype($value)=="array")
                {
                    $pagina=$this->remplazarEstructura($pagina, $key, $value);
                           
                }
                else
                {
                    $pagina=  str_replace("[$key]", $value, $pagina);     
                }
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
    
    private function remplazarEstructura($html,$nombre,$diccionario)
    {
       // echo $nombre;
        //$nombre="columna";
        $apertura="<!--estructura=".$nombre."-->";

        $cierre="<!--/estructura=".$nombre."-->";

        //echo $apertura;
        $posApertura=strpos($html,$apertura);
        $posCierre=strpos($html,$cierre);
        $tamanio=  strlen($html);

        $nuevaCadena=substr($html,$posApertura,($posCierre-$posApertura)+  strlen($cierre));
        //echo $nuevaCadena;

        $tramo=  str_replace($apertura,"",$nuevaCadena);
        $tramo=  str_replace($cierre,"",$tramo);

       // echo $tramo;
        //echo "-> $posApertura <- $posCierre";

              //echo $diccionario["columna"]["fila2"][2];
        //REMPLAZAR LOS VALORES Y GENERAR EL NUEVO COGIDO

        $clave;
        foreach ($diccionario as $key => $arreglo)
        {
              $clave=$key;
              break;
        } 

        $nuevaCorte="";

        for ($i=0;$i<count($diccionario[$clave]);$i++)
        {
            $remplazado=$tramo;
            foreach ($diccionario as $key => $arreglo)
            {
               //echo $diccionario['columna'][$key][$i]." ->";
                if(gettype($diccionario[$key][$i])=="array")
                {
                    $remplazado=$this->remplazarEstructura($remplazado,$key,$diccionario[$key][$i]);
                }
                else
                {                   
                    $remplazado=str_replace("[$key]",$diccionario[$key][$i], $remplazado);
                }
            }
            $nuevaCorte=$nuevaCorte.$remplazado;
            //echo "</br>";
        }

        $paginaFinal=str_replace($nuevaCadena,$nuevaCorte,$html);
        return $paginaFinal;

        
    }
    
    protected function getConfiguracion()
    {
        return $this->configuracion;
    }
    
    public  function direccionar($url)
    {
        $direccion = 'Location:';
        $direccion = $direccion . $this->configuracion->sitename . $url;
        //$direccion=  $this->configuracion->$sitename;
        header($direccion);
    }
    
}

?>
