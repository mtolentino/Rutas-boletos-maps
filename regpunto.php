<?php include ("conexion.php"); 

$c=$_POST['carro'];
$p=$_POST['punto'];


$d=date("m.d.y");

include ("conexion.php");



$sql=mysql_query("INSERT INTO rutapuntos (punto, idruta)
VALUES ('$p','$c')",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Guardado Correctamente')</script>";
print("<script>window.location.replace('crutas.php');</script>"); 
mysql_close($con);




?>