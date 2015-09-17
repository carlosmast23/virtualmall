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

<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="../js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="../js/cufon-yui.js"></script>
		<script type="text/javascript" src="../js/cufon-replace.js"></script>  
		<script type="text/javascript" src="../js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="../js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="../js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="../js/tms-0.3.js"></script>
		<script type="text/javascript" src="../js/tms_presets.js"></script>
		<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="../js/atooltip.jquery.js"></script>
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
	<body id="page1">
	<div class="main">
<!--header -->
			<header>
				<div class="wrapper">
					<h1><a href="indexVista.php.html" id="logo">Superior.com</a></h1>
					<form id="search" method="post">
						<fieldset>
							<div class="bg"><input class="input" type="text" value="Buscar"  onblur="if(this.value=='') this.value='Buscar'" onFocus="if(this.value =='Buscar' ) this.value=''" ></div>
						</fieldset>
					</form>
				</div>
				<nav>
					<ul id="menu">
						<li class="active"><a href="indexVista.php.html"><span>Inicio</span></a></li>
						<li><a href="Company.html"><span>Sucursal</span></a></li>
						<li><a href="Solutions.html"><span>BUscador</span></a></li>
						<li><a href="Services.html"><span>Servicios</span></a></li>
						<li class="last"><a href="Contacts.html"><span>Contactos</span></a></li>
					</ul>
				</nav>
				
	  </header>
<!--header end-->
<!--content -->
<div class="wrapper"><!-- TemplateBeginEditable name="Contenido" -->
  <h2>Contenido</h2>
<!-- TemplateEndEditable --></div>
<!--content end-->
<!--footer -->
			<footer>
				<ul id="icons">
					<li class="first">Siguenos:</li>
					<li><a href="#" class="normaltip" title="Facebook"><img src="../images/icon1.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Twitter"><img src="../images/icon2.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="Picasa"><img src="../images/icon3.jpg" alt=""></a></li>
					<li><a href="#" class="normaltip" title="YouTube"><img src="../images/icon4.jpg" alt=""></a></li>
				</ul>
				VirtualMall.com &copy; 2015 <br>
				Website Develoment by <a href="http://www.templatemonster.com/" target="_blank">Codesoft.com</a><br>
				<!-- {%FOOTER_LINK} -->
		  </footer>
<!--footer end-->
	</div>
		<script type="text/javascript"> Cufon.now(); </script>
		<script>
			$(window).load(function(){
				$('#slider')._TMS({
					banners:true,
					waitBannerAnimation:false,
					preset:'diagonalFade',
					easing:'easeOutQuad',
					pagination:true,
					duration:400,
					slideshow:8000,
					bannerShow:function(banner){
						banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
					},
					bannerHide:function(banner){
						banner.stop().animate({marginRight:-500}, 600)
					}
					})
			})
		</script>
	</body>
</html>