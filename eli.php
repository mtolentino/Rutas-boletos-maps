
<?php
include ("conexion.php");



$id=$_GET['s'];

$sql=mysql_query("delete from chofer where idchofer='$id'",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Eliminado Correctamente')</script>";
print("<script>window.location.replace('choferes.php');</script>"); 
mysql_close($con);


?>
