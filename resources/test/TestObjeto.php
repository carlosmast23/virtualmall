<?php
    
    //require_once '../VariablesGlobales.php';
    require_once $_SERVER['DOCUMENT_ROOT'].'/resources';
    require_once RAIZ."resources/modelo/servicios/UsuarioServicio.php";    
    require_once RAIZ."resources/modelo/vo/Usuario.php";    
    
    //
    $usuario= new Usuario();
    $parametros='';
    $usuario->llenarConArray($_REQUEST);
    var_dump($usuario);
//    $obj=new UsuarioServicio();
//    $array=$obj->obtenerTodosLosDatos();
//    //$array=$obj->getPorClavePrincipal("carlos");
//   // $array=$obj->obtenerPorClave("nick","carlos");
//    //echo count($array);
//    for($i=0; $i< count($array); $i++)
//    {
//        echo $array[$i]."<br>";        
//    }
//    
//    $objEdit=$array[0];    
//   // $objEdit->saveEstado();
//   // $objEdit->setNick("charly");
//   // $objEdit->setClave("123");
            
    
?>
