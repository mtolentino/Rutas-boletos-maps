<body bgcolor="white">
Sistema de boletos de ruta
<?php  

 $s=$_GET['s'];

include ("conexion.php");


$sql=mysql_query("SELECT * FROM rutauser where id='$s'",$con);

if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
 ?>  
 <ul style="list-style:none;"> 
  <li class="lis"><strong>Ruta:</strong><br><?php echo $row[0]; ?></li>
  <li class="lis"><strong>id Boleto:</strong><br><?php  echo $row[1] ?></li>  
  <li class="lis"><strong>No.boletos:</strong><br><?php echo $row[2] ?></li> 
  <li class="lis"><strong>Nombre:</strong><br><?php echo $row[3] ?></li>  
  <li class="lis"><strong>Dia:</strong><br><?php echo $row[4] ?></li>

    
</ul>
<input type="button" name="imprimir" value="Imprimir" onclick="window.print();">
<hr>
<?php

}}
?>
<body>