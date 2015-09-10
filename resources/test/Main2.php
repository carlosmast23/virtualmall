<?php
//recuperamos la ruta que tiene almacenada por defecto.
//$arPaths[] = get_include_path();
define('RAIZ',$_SERVER['DOCUMENT_ROOT']."/virtualmall"); 
//guardamos las rutas personalizadas.  Para este ejemplo solo utilizaré
//los modelos controladores y vistas
//$arPaths[] = RAIZ."/resources";
$arPaths[] = RAIZ."/resources";
//$arPaths[] = "/Applications/MAMP/htdocs/my_project/classes/views";
//$arPaths[] = "/Applications/MAMP/htdocs/my_project/classes/controllers";
 
$sMergedPaths = implode(PATH_SEPARATOR,$arPaths);
set_include_path($sMergedPaths);

//El nuevo included path será algo como esto:
//.:/Applications/MAMP/bin/php5.3/lib/php:/Applications/MAMP/htdocs/my_project/classes/models:
///Applications/MAMP/htdocs/my_project/classes/views:/Applications/MAMP/htdocs/my_project/classes/controllers
?>

<?php
    include_once 'Config.php';
    echo "Segundo ejemplo";
    $config=new Config();
   // $conexion=new Conexion();
    echo $config->db;
?>
