<?php include ("conexion.php"); 
session_start();
$us=$_SESSION['nombre'];
$r=$_POST['ruta'];
$b=$_POST['boleto'];
$n=$_POST['no'];
$f=$_POST['fe'];


$sql=mysql_query("INSERT INTO rutauser (ruta, boleto,no,user,dia)
VALUES ('$r','$b','$n','$us','$f')",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Guardado Correctamente')</script>";
print("<script>window.location.replace('yorutas.php');</script>"); 
mysql_close($con);



?>