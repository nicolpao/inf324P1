<?php
$conexion=mysql_connect("localhost","root","");
if (! $conexion){

echo "<h2 align='center'>ERROR: Imposible establecer conección con el servidor de AMPER</h2>";

exit;

}
$base=mysql_select_db("mibdpao");
?>
