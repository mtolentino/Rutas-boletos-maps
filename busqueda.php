<?php
include ("encabezado4.php");
include ("conexion.php");
$r= $_GET['corrida'];

//$usuario= $_POST['nick'];
//$clave = $_POST['pass'];

$resultado = mysql_query("select * from rutas where ruta = '". $r. "'" ,$con);
$re = mysql_fetch_array($resultado);


$mapa = $re['mapa'];
$r2 = $re['ruta'];
echo '<iframe class="ifracons" src='.$mapa.'></iframe><br>';
echo '<strong>Ruta:</strong>'.$r2.'<br><br><h2>Chofer</h2>';


$sql=mysql_query("SELECT * FROM chofer where  corrida= '". $r. "' ",$con);
if (mysql_num_rows($sql) > 0) {
       
    while ($data = mysql_fetch_row($sql)) {
      //  $r = $row[1]; 
 		




$chof = $data['1'];
$corr = $data['6'];
$dia= $data['7'];
echo '<ul class="cons"><strong>Chofer:</strong>'.$chof.'<br><strong>Horario:</strong>'.$corr.'<br><strong>Dias</strong>'.$dia.'</ul>';
       //     header("Location: home.php");
}}else {
	 echo 'SIN CHOFER ASIGNADO!!';
}
///////////////////////////////////////
echo '<br><h2>Puntos</h2>';
$sql3=mysql_query("SELECT * FROM rutapuntos where  idruta= '". $r. "' ",$con);
if (mysql_num_rows($sql3) > 0) {
  echo '<div class="puntosele">' ;    
    while ($data3 = mysql_fetch_row($sql3)) {
      //  $r = $row[1]; 
 		




$rut = $data3['1'];
echo $rut.',&nbsp;&nbsp;';
       //     header("Location: home.php");
}}else {
	 echo 'NO HAY PUNTOS!!';
}
echo '<div>';

?>
