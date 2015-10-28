<?php
   $nombre_archivo = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    //verificamos si en la ruta nos han indicado el directorio en el que se encuentra
    if (strpos($nombre_archivo, '/') !== FALSE)
    //de ser asi, lo eliminamos, y solamente nos quedamos con el nombre y su extension
    $nombre_archivo = array_pop(explode('/', $nombre_archivo));
    echo $nombre_archivo;
    $nombre_archivo=  str_replace("Vista","",$nombre_archivo);
    header('Location: '.$nombre_archivo);
?>

<!doctype html>
<html><!-- InstanceBegin template="/Templates/pageSites.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head >
<meta charset="utf-8">
<title>[nombre]</title>
  <style type="text/css">
  body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	background-image:url([imagenFondo]);
	margin: 0;
	padding: 0;
	color: #000;
}
  
  	ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados  */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	width: 160px;  /*esta anchura hace que se pueda hacer clic en todo el botón para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este vínculo de la anchura del contenedor de barra lateral. */
	text-decoration: none;
	background-color: [colorMenu];
	color:[colorMenuText];
}

ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #00D5CB;
	color: #FFF;
}

/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: [colorLink];
	text-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: [colorVisited];
	text-decoration: underline;
}
  </style>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/HTML5_twoColFixRtHdr.css" rel="stylesheet" type="text/css"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body style="background-color:[colorBackground]">

<div class="container" style="background-color:[colorContent];;background-image:url([contentImage])">
  <header style="background-color:[colorHeader];background-image:url(../images/pages/codesoft/fondoBanner.png)">
    <a href="#" ><img src="[direccion]" alt="Insertar logotipo aquí" width="600px" height="200px" id="Insert_logo" style="margin: 0 auto;" /></a>
  </header>
  <div class="sidebar1" style="background-color:[colorSlider];color:[colorSliderText]">
    <ul class="nav">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Vínculo tres</a></li>
        <li><a href="#">Contactos</a></li>
    </ul>
    <aside>
      <table width="100%" border="0">
        <tbody>
          <tr>
            <td align="center">
            	<img src="../images/pages/codesoft/logo1.png" width="150" height="150" alt=""/>
            </td>
          </tr>
          <tr>
            <td>
            	<p>[descripcion]</p>
            
            </td>
          </tr>
        </tbody>
      </table>
 
    </aside>
  <!-- end .sidebar1 --></div>
  <article class="content" style="background-color:[colorContent];color:[colorContentText];background-image:url([contentImage])">
    <h1>Instrucciones</h1>
    <section>
     <h2>Cómo utilizar este documento</h2>
      <p>Tenga en cuenta que la CSS para estos diseños cuenta con numerosos comentarios. Si realiza la mayor parte de su trabajo en la vista Diseño, eche un vistazo al código para obtener sugerencias sobre cómo trabajar con la CSS para diseños fijos. Puede quitar estos comentarios antes de lanzar el sitio. Para obtener más información sobre las técnicas usadas en estos diseños CSS, lea este artículo en el Centro de desarrolladores de Adobe: <a href="http://www.adobe.com/go/adc_css_layouts_es">http://www.adobe.com/go/adc_css_layouts_es</a>.</p>
    </section>
    <section>
      <h2>Método de borrado</h2>
      <p>Dado que todas las columnas son flotantes, este diseño usa una declaración clear:both en la regla footer.  Esta técnica de borrado fuerza a .container a conocer dónde terminan las columnas con el fin de mostrar cualquier borde o color de fondo que coloque en .container. Si su diseño exige la eliminación de .footer de .container, deberá usar un método de borrado diferente. Lo más fiable es añadir un &lt;br class=&quot;clearfloat&quot; /&gt; o &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; después de la última columna flotante (pero antes del cierre de .container). Esto proporcionará el mismo efecto de borrado. </p>
    </section>
    
      <h2>Método de borrado</h2>
      <p>Dado que todas las columnas son flotantes, este diseño usa una declaración clear:both en la regla footer.  Esta técnica de borrado fuerza a .container a conocer dónde terminan las columnas con el fin de mostrar cualquier borde o color de fondo que coloque en .container. Si su diseño exige la eliminación de .footer de .container, deberá usar un método de borrado diferente. Lo más fiable es añadir un &lt;br class=&quot;clearfloat&quot; /&gt; o &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; después de la última columna flotante (pero antes del cierre de .container). Esto proporcionará el mismo efecto de borrado. </p>
    </section>


  <!-- end .content --></article>
  <footer style="background-color:[colorFooter];color:[colorFooterText]">
    <p>Codesoft 2014 develoment by Codesoft</p>
    
    <div style="text-align: center;padding-bottom:0px">
    	<table style=" margin: 0 auto;" border="0">
          <tbody>
            <tr>
              <td><a href="#"><img src="img/home.png" width="40" height="40" alt="Pagina Principal"/></a></td>
              <td><a href="#"><img src="img/facebook.png" width="40" height="40" alt="Facebook"/></a></td>
              <td><a href="#"><img src="img/twiter.png" width="40" height="40" alt="Twiter"/></a></td>
              <td><a href="#"><img src="img/youtube.png" width="40" height="40" alt="YouTube"/></a></td>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
     </div>
	

  </footer>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>
