
<?php
include ("conexion.php");

$id=$_GET['punto'];
$cambio=$_GET['punto2'];



$idcom=$_POST['idcom'];
$sql=mysql_query("update  rutapuntos set punto='$cambio' where punto='$id'",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }


 print "<script>alert('Guardado Correctamente')</script>";
print("<script>window.location.replace('rutas.php');</script>"); 
mysql_close($con);


?>
