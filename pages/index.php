<?php
    function findFirstPath(){$path=str_replace('\\', '/',dirname(__FILE__));$archivo="/Config.php";$condicion=true;while($condicion){$dirFinal=$path.$archivo;if (file_exists($dirFinal))return realpath($dirFinal);else{$respaldo=$path;$path=rtrim(dirname($path). PHP_EOL);if($respaldo==$path){return false;}}}}
    require_once findFirstPath();    
?>


<?php

require_once CONTROLADOR_SET;

class Controlador extends ControladorSet
{
    public function buscarValores() 
    {
        $this->diccionario['direccion']=IMAGENES."codesoft/banner1.png";
        $this->diccionario['nombre']="Codesoft";
        $this->diccionario['descripcion']="Codesoft es una empresa de servicios que se encarga de brindar soporte en hadware y software";
        $this->diccionario['colorHeader']="#ccced9";
        $this->diccionario['colorSlider']="#00105f";
        $this->diccionario['colorSliderText']="#ffffff";
        $this->diccionario['colorBackground']="#fefb00";
        
        $this->diccionario['colorContent']="#000000";
        $this->diccionario['colorContentText']="#00114f";
        
        $this->diccionario['colorFooter']="#211172";
        $this->diccionario['colorFooterText']="#ffffff";
        
        $this->diccionario['colorMenu']="#ffd800";
        $this->diccionario['colorMenuText']="#00157e";
        
        $this->diccionario['colorLink']="#1a4a00";
        $this->diccionario['colorVisited']="#000000";
        
        $this->diccionario['imagenFondo']=IMAGENES."codesoft/fondo.png";
        $this->diccionario['contentImage']=IMAGENES."codesoft/fondoTexto.png";
        
        
        
        
    }

    public function setDiccionario() {
        $this->diccionario= array(
           "descripcion"=>"",
           "direccion"=>" ",
           "nombre"=>"",
           
           "colorHeader"=>"",
           "colorSlider"=>"",
           "colorSliderText"=>"",
           "colorBackground"=>"",
           "colorContent"=>"",
           "colorContentText"=>"",
           "colorFooter"=>"",
           "colorFooterText"=>"",
            
           "colorMenu"=>"",
           "colorMenuText"=>"",
            
           "colorLink"=>"",
           "colorVisited"=>"",
            
           "imagenFondo"=>"",
           "contentImage"=>"",
             
        );
    }

    public function getPagina() {
        return "indexVista.php";
    }

    
    public function setPermisos() {
        $this->permisos=array(
        Controlador::$todos,
        );
    }

}
(new Controlador())->renderizar();

?>