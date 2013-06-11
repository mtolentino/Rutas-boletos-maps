<?php include("encabezado4.php"); 

?>


<h2>MODIFICAR RUTAS</h2>
<form class="unw" method="get" action="change.php">
	
<ul class='un' style="text-align:left;">
	<h3><img src="ruta.png">Ruta</h3>

<?php 
include ("conexion.php");
$idmod=$_GET['mod2'];

$sql2=mysql_query("SELECT * FROM rutas where ruta='$idmod'",$con);

       
    while ($row2 = mysql_fetch_row($sql2)) {
        $mapa = $row2[2]; 
		
}
	?>



		<li>Modificar<input class='wid' name="rut" style="color:blue;"required value='<?php echo $idmod; ?>'></li>
	<li><input name='rut2' type='hidden'value='<?php echo $idmod; ?>' ></li>
	<li>Mapa:src:</li><li><textarea name="mapasrc" style="color:blue;"required placeholder="Pegue aqui el src del mapa"><?php echo $mapa;  ?></textarea></li>

	<li><input type="submit" value="modificar ruta"></li>
</ul>

</form>

<script language=JavaScript>
function cambiaPalabra() {
  var idi = $("#punto").val();
document.son.punto2.value=idi;
}
</script>

<form name="son" class="unw" method="get" action="change2.php">

<ul class='un' style="text-align:left;">
		<h3><img src="pto.png">Punto</h3>
	<?php include ("conexion.php");


$sql=mysql_query("SELECT * FROM rutapuntos where idruta='$idmod'",$con);
echo '<li>Escoja ruta:<br>';
echo '        <select  id="punto" name="punto"onclick="return cambiaPalabra();" >';
if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
        $ti = $row[1]; 
        
 
echo '<option>'.$ti.'</option>';

}}
	?>
</select></li><br>


	<li>Mod Punto:</li>
	<li><input name="punto2" style="color:blue;"class='wid' required placeholder="cargue el nombre"></li>
	<li><input type="submit" value="Punto"></li>
</ul>
</form>



    
     
      
       


