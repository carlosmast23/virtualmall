<?php
    require_once '../VariablesGlobales.php';
    //require_once RAIZ.'Conexion.php';
    require_once RAIZ."resources/modelo/conexion/Conexion.php";    
    $conexion=new Conexion();
    $conexion->conectar();
   // $conexion->ejecutar("INSERT INTO `virtualmalldb`.`usuario` (`nick`, `clave`) VALUES ('pedro', 'clave');");
    $conexion->consulta("SELECT * FROM USUARIO");

?>
