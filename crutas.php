<?php include("encabezado4.php"); 

?>
<h2>REGISTRO RUTAS</h2>
<form class="unw" method="post" action="regruta.php">
	
<ul class="un" style="text-align:left;">
	<h3><img src="ruta.png">Ruta</h3>
	<li>Registrar ruta:<br><input class='wid' name="carro" required placeholder="Consuelo-V.Alto"></li>
	<li></li>
	<li>Mapa:src:</li><li><textarea name="mapasrc" required placeholder="Pegue aqui el src del mapa"></textarea></li>

	<li><input type="submit" value="registrar carro"></li>
</ul>
</form>

<form class="unw" method="post" action="regpunto.php">

<ul class="un" style="text-align:left;">
		<h3><img src="pto.png">Punto</h3>
	<?php include ("conexion.php");


$sql=mysql_query("SELECT * FROM rutas",$con);
echo '<li>Escoja ruta:<br>';
echo '        <select name="carro" >';
if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
        $ti = $row[1].""; 
        
 
echo '<option>'.$ti.'</option>';

}}
	?>
</select></li><br>


	<li>Punto:</li>
	<li><input name="punto" class='wid' required placeholder="IMSS"></li>
	<li><input type="submit" value="Punto"></li>
</ul>
</form>



    
     
      
       


