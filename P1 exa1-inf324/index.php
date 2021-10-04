<?php
@$sw = $_GET["sw"];
?>																																			

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashionpress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--VER MAS ADELANTE SI EL SCRIPT ES NECESARIO-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--HASTA AQUI-->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<title>FCPN</title>

<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script type="text/javascript" src="js/hover_pack.js"></script>

</head>
<doby>
<div class="header">
	<div class="header_top">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/logogo.pnj" alt=""/></a>
			</div>
			<ul class="shopping_grid">
			      <a href="usuario.php"><li><span class="m_1">Registrarse</span><img src="images/usu.jpg" alt=""/></li></a>
			      <a href="index.php"><li><span class="m_1">Iniciar Sesion</span><img src="images/usu.jpg" alt=""/></li></a>
			      <div class="clearfix"> </div>
			</ul>
		    <div class="clearfix"> </div>
		</div>
	</div>
	<div class="h_menu4"><!-- start h_menu4 -->
		<div class="container">
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
							<li class="active"><a href="index.html" data-hover="Home"><b>Principal</b></a></li>
							<li><a href="./informatica" data-hover="About Us"><b>Informatica</b></a></li>
							<li><a href="./fisica" data-hover="About Us"><b>Fisica</b></a></li>
							<li><a href="./biologia" data-hover="About Us"><b>Biologia</b></a></li>
				 </ul>
				 <script type="text/javascript" src="js/nav.js"></script>
	      </div><!-- end h_menu4 -->
     </div>
</div>


<?php
if($sw=="1") {echo"<b><font color='red' size='5' align='center'>Error de datos, intente de nuevo!</font></b><br>";}
?>
	<form role="form" method="post" action="login.php" class="form-signin" >	
		<div class="form-group">
		<img src="images/usu2.jpg">
		<label><b>Usuario:</b> <br><label>
		<input class="form-control" name="username" id="username" placeholder="usuario" type="text" size="25" maxlength="25" required />
		</div>
		<div class="form_group">
		<img src="images/pass2.jpg">
		<label><b>Password: </b><br><label>
		<input class="form-control" name="pasw" id="pasw" placeholder="Contraseña" type="password" size="25" maxlength="25" required />
		</div>
		<div class="form_group">
		<input class="btn btn-lg btn-primary" type="submit" name="ingresar" id="ingresar" value="Ingresar">
		</div>
	</form>
<?php // include "cabecera.inc.php"; ?>		
<?php  include "pie.inc.php"; ?>