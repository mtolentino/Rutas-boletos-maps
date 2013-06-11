
<?php include("encabezado4.php"); 

?>
<form class="un" method="get" action="busqueda.php">

<h2>Rutas</h2>

<ul class="unw" style="text-align:left;">
	<?php include ("conexion.php");


$sql=mysql_query("SELECT * FROM rutas",$con);
echo '<li class="ident2">Consultar:';
echo '        <select name="corrida" >';
if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
        $r = $row[1]; 
 		
echo '<option>'.$r.'</option>';

}}
	?>
</select></li>
<li><input value='Busqueda' type='submit'></li><br><br>

</ul>

</form>

<form class="un" method="get" action="mod2.php">



<ul class="unw" style="text-align:left;">
	<?php 


$sql2=mysql_query("SELECT * FROM rutas",$con);
echo '<li class="ident2">Modificar:';
echo '        <select name="mod2" >';
if (mysql_num_rows($sql2) > 0) {
       
    while ($row2 = mysql_fetch_row($sql2)) {
        $r2 = $row2[1]; 
 		
echo '<option >'.$r2.'</option>';

}}
	?>
</select></li>
<li><input value='Modificar' type='submit'></li><br><br>

</ul>

</form>




<form class="un" method="get" action="eli2.php">



<ul class="unw" style="text-align:left;">
	<?php 


$sql2=mysql_query("SELECT * FROM rutas",$con);
echo '<li class="ident2">Eliminar:';
echo '        <select name="eli2" >';
if (mysql_num_rows($sql2) > 0) {
       
    while ($row2 = mysql_fetch_row($sql2)) {
        $r2 = $row2[1]; 
 		
echo '<option>'.$r2.'</option>';

}}
	?>
</select></li>
<li><input value='Eliminara todo su contenido' type='submit'></li><br><br>

</ul>

</form>

    

