
<?php
include ("conexion.php");



$id=$_GET['eli2'];

$sql=mysql_query("delete from rutas where ruta='$id'",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }

$sql2=mysql_query("delete from rutapuntos where idruta='$id'",$con);

if (!$sql2)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Eliminado Correctamente')</script>";
print("<script>window.location.replace('rutas.php');</script>"); 
mysql_close($con);


?>
