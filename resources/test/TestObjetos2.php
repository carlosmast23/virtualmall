<?php

    require_once '../VariablesGlobales.php';
    require_once RAIZ."resources/VariablesGlobales.php"; 
    
    //$array = array(0 => 100, "color" => "red");
    session_start();
    $_SESSION["session"]="todos";
    
    //echo $array[1];
    //print_r(array_keys($array));
    //echo 'Location: http://localhost/virtualmall/index.html';
    //header('Location: http://localhost/virtualmall/index.html');
    //echo "todo bien";
    //print_r(array_search('red', $array));
?>