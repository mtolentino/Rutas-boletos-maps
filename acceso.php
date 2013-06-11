<?php
session_start();
include ("conexion.php");
$usuario= $_POST['nick'];
$clave = $_POST['pass'];

$resultado = mysql_query("select * from users where nick = '". $usuario. "' and password = '". $clave ."'" ,$con);
$registro = mysql_fetch_array($resultado);
//$tipo_usuario = $registro['tipo'];
 $_SESSION['nick'] =  $registro['nick'];
 $_SESSION['id'] =  $registro['id'];
 $_SESSION['nombre'] =  $registro['nombre'];
if (!mysql_num_rows($resultado))
     echo "Acceso denegado <br>";
else
{


            header("Location: home.php");

}
?>
