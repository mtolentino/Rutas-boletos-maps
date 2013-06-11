
<?php
include ("conexion.php");

$mapa=$_GET['mapasrc'];
$cambio=$_GET['rut'];
$id=$_GET['rut2'];


$idcom=$_POST['idcom'];
$sql=mysql_query("update  rutas set ruta='$cambio',mapa='$mapa' where ruta='$id'",$con);
$sql2=mysql_query("update  chofer set corrida='$cambio' where corrida='$id'",$con);
$sql3=mysql_query("update  rutapuntos set idruta='$cambio' where idruta='$id'",$con);
if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }
if (!$sql2)
  {
  die('Error: ' . mysql_error($con));
  }
if (!$sql3)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Guardado Correctamente')</script>";
print("<script>window.location.replace('rutas.php');</script>"); 
mysql_close($con);


?>
