<?php
session_start();
$user = $_POST["username"];
$pasw = $_POST["pasw"];
//$pasw = md5($pasw);
require("funciones/motor.php");
include "conexion.inc.php";
$consulta="SELECT p.ci,u.usuario,u.nivel,p.nombre
			FROM usuario u, persona p 
			WHERE u.usuario='$user' and u.password='$pasw'";
$resultado=mysql_query($consulta);
$filas=mysql_num_rows($resultado);
if($filas!=0)
{ 
$dato=mysql_fetch_array($resultado);
///aca asigno a variables de sesion ciertos datos: 
$_SESSION["ci"] = $dato['ci'];
$_SESSION["usuario"] = $dato['usuario'];
$_SESSION["nivel"] = $dato['nivel'];
$_SESSION["nombre"] = $dato['nombre'];
// se redirecciona a SECRETARIA.php
header("Location: cabecera.inc.php");
}
else{
	// en caso de error retorna a ingreso.php y envia una bandera pra indicar q el logeo fue incorrecto
	header("Location: index.php?sw=1");
	}

?>