
<h2>Datos</h2>
<?php


include("encabezado4.php");include ("conexion.php");
$id=$_GET['s'];

$sql=mysql_query("SELECT * FROM chofer where idchofer='$id' ",$con);

if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
 ?>  
 <ul class="chofmas" style="color:black;"> 
  <li ><strong>Nombre:</strong><br><?php  $id=$row[0] ;echo $row[1];?></li>
  <li ><strong>Corrida:</strong><br><?php  echo $row[5]?></li>  
  <li ><strong>Horario:</strong><br><?php  echo $row[6]?></li>  
  <li ><strong>Dias:</strong><br><?php  echo $row[7]?></li>
   <li ><strong>Nacimiento:</strong><br><?php  echo $row[2]?></li>
     <li ><strong>Domicilio:</strong><br><?php  echo $row[3]?></li>   
 <li ><strong>Tel:</strong><br><?php  echo $row[4]?></li>
    
</ul>
<input type='submit' value='Imprimir'onclick="window.print();">
<?php

}}

?>


    

