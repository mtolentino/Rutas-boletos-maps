<?php include ("conexion.php"); 

$r=$_POST['carro'];
$m=$_POST['mapasrc'];


$d=date("m.d.y");

include ("conexion.php");



$sql=mysql_query("INSERT INTO rutas (ruta, mapa)
VALUES ('$r','$m')",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Guardado Correctamente')</script>";
print("<script>window.location.replace('crutas.php');</script>"); 
mysql_close($con);




?>