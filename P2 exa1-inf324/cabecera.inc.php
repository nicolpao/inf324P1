<?php
	include "conexion.inc.php";
	session_start();
	$ci=$_SESSION["ci"];
    $nombre=$_SESSION["usuario"];
    $nivel=$_SESSION["nivel"];
    $nom=$_SESSION["nombre"];
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
	<body>
		<div class="header">
			<div class="header_top">
				<div class="container">
					<div class="logo">
						<a href="index.html"><img src="images/logogo.pnj" alt=""/></a>
					</div>
					<ul class="shopping_grid">
					      <a href="index.php"><li><span class="m_1">Iniciar Sesion</span><img src="images/usu.jpg" alt=""/></li></a>
					      <a href="cerrar.php"><li><span class="m_1">Cerrar Sesion</span><img src="images/usu.jpg" alt=""/></li></a>  
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
							<li class="grid_2-right"><a href="donacion.php" data-hover="Contact Us"><div class="btn btn-primary btn-normal btn-inline "><b>DONACION</b></div></a></li>
						 </ul>
						 <script type="text/javascript" src="js/nav.js"></script>
			      </div><!-- end h_menu4 -->
		     </div>
		</div>

		<?php
        if($_SESSION['nivel']==2){
        echo "
        <div class='container'>
        <div class='col-lg-8'><font color='Darkblue' size='6' face='Monotype Corsiva'><b>BIENVENID@:</b></font>
        <font face='Haettenschweiler' size='8' color='Darkblue'><b>Universitario </b></font>
        <font face='Monotype Corsiva' size='5' color='Darkblue'><b>$nombre</b></font><br>";
        ?>
        </div>  
        </div>
		<div id="cabecera">
			
		</div>
		<div class="cuerpo">
			<table border="1">
				<thead>
				<tr>
					<th>Sigla</th>
					<th>Nota 1</th>
					<th>Nota 2</th>
					<th>Nota 3</th>
					<th>Nota Final</th>
				</tr>
				</thead>
				<tbody>
				<?php
					$sql="SELECT * 
						  FROM notas
						  WHERE ci = '$ci'";
					$resultado=mysqli_query($conn, $sql);
					echo "Estudiante:$nom </br>";
					echo "Ci: $ci";
					while($fila=mysqli_fetch_array($resultado)) {
						echo "<tr>"; 
						echo "<td>$fila[sigla]</td>";
						echo "<td>".$fila["nota1"]."</td>";
						echo "<td>".$fila['nota2']."</td>";
						echo "<td>".$fila['nota3']."</td>";
						echo "<td>".$fila['notafinal']."</td>";
						echo "</tr>";
					}
				?>
				</tbody>
			</table>
		</div>

		<?php
        }if($_SESSION['nivel']==1){
        echo "
        <div class='container'>
        <div class='col-lg-8'><font color='Darkblue' size='6' face='Monotype Corsiva'><b>BIENVENID@:</b></font>
        <font face='Haettenschweiler' size='8' color='Darkblue'><b>Docente </b></font>
        <font face='Monotype Corsiva' size='5' color='Darkblue'><b>$nombre</b></font><br>";
        ?>
        </div>  
        </div>
		<div id="cabecera">
			
		</div>
		<div class="cuerpo">
			<table border="1">
				<thead>
				<tr>
					<th>La Paz</th>
					<th>Cochabamba</th>
					<th>Santa Cruz</th>
				</tr>
				</thead>
				<tbody>
				<?php
				https://www.delftstack.com/es/howto/php/how-to-echo-or-print-an-array-in-php/
					$sql="SELECT p.departamento, avg(n.notafinal)nota
							FROM notas n, persona p
							WHERE n.ci = p.ci
							GROUP BY p.departamento;";
					$resultado=mysqli_query($conn, $sql);
					$resultado1=mysqli_query($conn, $sql);

					echo "<tr>";
					while($fila=mysqli_fetch_array($resultado)){
						
						echo "<td>".$fila["departamento"]."</td>";
					}
					echo "</tr>";
					echo "<tr>";
					while($fila=mysqli_fetch_array($resultado1)){
						
						echo "<td>$fila[nota]</td>";
					}
					echo "</tr>";
				?>
				</tbody>
			</table>
		</div>
<?php
}
?>