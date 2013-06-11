<?php include ("conexion.php"); 

$n=$_POST['nombre'];
$nick=$_POST['nick'];
$pass=$_POST['pass'];
$fecha=$_POST['fecha'];

$d=date("m.d.y");

include ("conexion.php");



$sql=mysql_query("INSERT INTO users (nombre, nick,password,fechana, reg)
VALUES ('$n','$nick','$pass','$fecha','$d')",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Guardado Correctamente')</script>";
print("<script>window.location.replace('principal.php');</script>"); 
mysql_close($con);




?>