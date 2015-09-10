<?php
//recuperamos la ruta que tiene almacenada por defecto.
//$arPaths[] = get_include_path();
//guardamos las rutas personalizadas.  Para este ejemplo solo utilizaré
//los modelos controladores y vistas
//$arPaths[] = "C:/xampp/php/PEAR/htdocs/resources/modelo/conexion";
//$arPaths[] = "/Applications/MAMP/htdocs/my_project/classes/views";
//$arPaths[] = "/Applications/MAMP/htdocs/my_project/classes/controllers";
 
//$sMergedPaths = implode(PATH_SEPARATOR,$arPaths);
//set_include_path($sMergedPaths);
//El nuevo included path será algo como esto:
//.:/Applications/MAMP/bin/php5.3/lib/php:/Applications/MAMP/htdocs/my_project/classes/models:
///Applications/MAMP/htdocs/my_project/classes/views:/Applications/MAMP/htdocs/my_project/classes/controllers
?>

<?php
//include_once 'C:/xampp/php/PEAR/htdocs/resources/modelo/conexion/Conexion.php';
   // include_once '../Config.php';
    //include_once '../modelo/conexion/Conexion.php';
    
    //echo "-------> Pagina de prueba";
    
    define('RAIZ',$_SERVER['DOCUMENT_ROOT']."/virtualmall"); 
    echo RAIZ;
    include(RAIZ.'/resources/Config.php'); 
    
    //echo  $_SERVER['DOCUMENT_ROOT'];
    $config=new Config();
   // $conexion=new Conexion();
    echo $config->db;
    
?>

