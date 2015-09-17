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

<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/contenidoPrincipal.dwt.php" codeOutsideHTMLIsLocked="false" -->
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/cufon-replace.js"></script>  
		<script type="text/javascript" src="js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="js/atooltip.jquery.js"></script>
		<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
			</div>
		<![endif]-->
	</head>
	<body id="page5">
		<div class="main">
<!--header -->
			<header>
				<div class="wrapper">
					<h1><a href="indexVista.php.html" id="logo">Superior.com</a></h1>
					<form id="search" method="post">
						<fieldset>
							<div class="bg"><input class="input" type="text" value="Search"  onblur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''" ></div>
						</fieldset>
					</form>
				</div>
				<nav>
					<ul id="menu">
						<li><a href="indexVista.php.html"><span>Homepage</span></a></li>
						<li><a href="Company.html"><span>Company</span></a></li>
						<li><a href="Solutions.html"><span>Solutions</span></a></li>
						<li><a href="Services.html"><span>Services</span></a></li>
						<li class="last active"><a href="Contacts.html"><span>Contacts</span></a></li>
					</ul>
				</nav>
			</header>
<!--header end-->
<!--content -->
			<article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
				<div class="wrapper"><!-- InstanceBeginEditable name="Contenido" -->
				</br>	
                 <div style="width:30%;margin: 0 auto;border-width:4px;border-color:#5f870e;border-style:inset;padding:5px;text-align:center">
                 	<h2>Login</h2>
                    <form action="php/ValidarLogin.php" method="post">
                    	<div  class="wrapper">
                        	<span>Usuario:</span>
                             <div class="bg"><input name="usuario" type="text" class="input" id="usuario" />
                        </div>
                        
                        <div  class="wrapper">
                        	<span>Clave:</span>
                            <div class="bg"><input name="clave" type="password" class="input" id="clave" />
                        </div>
                        
                        </br>
                      		<input class="button1" type="submit" value="Ingresar">
                    </form>
                 </div>
				<!-- InstanceEndEditable --></div>
			</article>
		</div>
		<div class="bg1">
			<div class="main">
				<article id="content2">
					<div class="wrapper"><!-- InstanceBeginEditable name="Otro contenido" -->
					  <h3>Otro contenido</h3>
					<!-- InstanceEndEditable --></div>
				</article>
			</div>
		</div>
		<div class="main">
<!--content end-->
<!--footer -->
			<footer>
				<ul id="icons">
					<li class="first">Siguenos:</li>
					<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Picasa"><img src="images/icon3.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="YouTube"><img src="images/icon4.jpg" alt=""></a></li>
				</ul>
				Codesoft.com &copy; 2015 <br>Website develoment by <a href="http://www.templatemonster.com/" target="_blank">Codesoft.com</a><br>
				<!-- {%FOOTER_LINK} -->
			</footer>
<!--footer end-->
		</div>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
<!-- InstanceEnd --></html>