<?php
include ("encabezado4.php");
include ("conexion.php");
$r= $_GET['corrida'];

//$usuario= $_POST['nick'];
//$clave = $_POST['pass'];

$resultado = mysql_query("select * from rutas where ruta = '". $r. "'" ,$con);
$re = mysql_fetch_array($resultado);
$pid = getmypid();

 
$md5=$pid.uniqid();

$mapa = $re['mapa'];
$r2 = $re['ruta'];
?>
<h2>Apartar asiento</h2>
<form  method="post" action="regcompra.php">

<ul class='compra'>


	<li><h3>Ruta</h3>
		
	<?php include ("conexion.php");


$sql=mysql_query("SELECT * FROM rutas",$con);

echo '     <select name="ruta" >';
if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
        $ti = $row[1].""; 
        
 
echo '<option>'.$ti.'</option>';



}}
	?>
</select></li>
	
		
		<li> <h3>Boleto</h3><input name='boleto' required OnFocus="this.blur()" value="<?php echo $md5; ?>"></li> 
		<li><h3>Cuantos?</h3><input  name='no'type='number' placeholder='1'min="1" max="10" required></li>
		<li><h3>Dia</h3><input name='fe' type='date' required>&nbsp;&nbsp;<input type='submit'value='Apartar'></li>
		

</ul>
</form>
<form  method="get" action="busqueda.php">
<?php 
$sql3=mysql_query("SELECT * FROM rutas",$con);

echo ' <h2>Ver rutas</h2><br>   <select style="text-align:left;width:100%;"name="corrida" >';
if (mysql_num_rows($sql3) > 0) {
       
    while ($row3 = mysql_fetch_row($sql3)) {
        $ti3 = $row3[1].""; 
        
 
echo '<option>'.$ti3.'</option>';



}}

echo '</select><input type="submit" style="width:100%;">';


?>
</form>