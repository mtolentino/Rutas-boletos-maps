<?php include ("conexion.php"); 

$n=$_POST['nombre'];
$f=$_POST['fecha'];
$t=$_POST['tel'];
$d=$_POST['dom'];
$h=$_POST['horas'];
$h2=$_POST['horas2'];
$c=$_POST['corrida'];

 $lu=$_POST['lu'];

 $ma=$_POST['ma'];
 $mi=$_POST['mi'];
 $jue=$_POST['j'];
 $vie=$_POST['v'];
 $sab=$_POST['s'];
 $domin=$_POST['d'];


if ($lu='') {
	$lu='-';
}

include ("conexion.php");



$sql=mysql_query("INSERT INTO chofer (nombre, nac,domi,tel,corrida,horario,dias)
VALUES ('$n','$f','$d','$t','$c','$h-$h2','$lu$ma$mi
	jue$vie$sab$domin')",$con);

if (!$sql)
  {
  die('Error: ' . mysql_error($con));
  }

 print "<script>alert('Guardado Correctamente')</script>";
print("<script>window.location.replace('cchofer.php');</script>"); 
mysql_close($con);



?>