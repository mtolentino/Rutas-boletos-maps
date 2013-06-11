<?php include("encabezado4.php"); 

?>
<form class="un" method="post" action="regchofer.php">
	<h2>REGISTRO CHOFER</h2>
<ul class="unw" style="text-align:left;">
	
	<h3><img src="ch.png">Datos del chofer</h3>
	<li>Nombre completo:</li><li><input class='wid'name="nombre" required ></li>
	<li>Fecha nac.:<li></li><input class='wid' name="fecha" type="date" required ></li>
	<li>Tel:</li><li><input class='wid' name="tel" type="tel"required ></li>
	<li>Dom:</li><li><textarea name="dom" type="tel"required ></textarea></li>


</ul>



<ul class="unw" style="text-align:left;">
	<h3><img src="or.png">Datos del Corrida</h3>
	<?php include ("conexion.php");


$sql=mysql_query("SELECT * FROM rutas",$con);
echo '<li >Corrida:<br>';
echo '        <select class="wid" name="corrida" >';
if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
        $ti = $row[1].""; 
        
 
echo '<option>'.$ti.'</option>';

}}
	?>
</select></li>


	<li>Horario:</li>
	<li><input class='wid' name="horas" type="time" required ><br> a<br> <input class='wid' name="horas2" type="time" required ></li>
	<li>Dia</li>
	<li>L<input type="checkbox" value="L," name='lu'> M<input type="checkbox" value="MA," name='ma'>
		Mi<input type="checkbox" value="MI," name='mi'>J<input type="checkbox" value="J," name='j'>V<input type="checkbox" value="V," name='v'>S<input type="checkbox" value="S," name='s'>
	D<input type="checkbox" value="D," name='d'>
</li>
		<br>
	<li><input type="submit" value="Registrar"></li>
</ul>
</form>



    
     
      
       


