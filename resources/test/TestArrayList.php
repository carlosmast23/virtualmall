<?php
    require_once '../VariablesGlobales.php';
    require_once RAIZ."resources/modelo/vo/Usuario.php";   
    
    $usuario1=new Usuario("carlos","123");
    $usuario2=new Usuario("carlos","123");
    
    $info = array($usuario1,$usuario2);
    $info[2]=new Usuario("andres","123");
    // Enumerar todas las variables
    
     
   // list($bebida, $color, $energía) = $info;
    //echo "El $bebida es $color y la $energía lo hace especial.\n";
?>
