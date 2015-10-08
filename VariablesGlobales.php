<?php
   include_once './resources/Config.php';
   $config=  Config::getInstance();
   $subDir=$config->getSubSite();
   if(strlen($subDir)==0)
   {
       define('RAIZ',$_SERVER['DOCUMENT_ROOT']."/");
   }
 else 
   {
       define('RAIZ',$_SERVER['DOCUMENT_ROOT']."/$subDir/");
   }
   
   //define('RAIZ',$_SERVER['DOCUMENT_ROOT']."/$config->siteName/");
   define('CONTROLADOR',"resources/controlador/"); 
  // $arPaths[] = RAIZ."/resources";
  // $arPaths[] = RAIZ."/resources/conexion/";
  // $sMergedPaths = implode(PATH_SEPARATOR,$arPaths);
  // set_include_path($sMergedPaths);
   //echo RAIZ;

