
<h2>Lista Choferes</h2>
<?php
 session_start();
 $usu=$_SESSION['usuario'];

include("encabezado4.php");
include ("conexion.php");


$sql=mysql_query("SELECT * FROM chofer",$con);

if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
 ?>  
 <ul class="chof" style="color:black;"> 
  <li ><strong>Nombre:</strong><br><?php  $id=$row[0] ;echo $row[1];?></li>
  <li ><strong>Corrida:</strong><br><?php  echo $row[5]?></li>  
  <li ><strong>Horario:</strong><br><?php  echo $row[6]?></li>  
  <li ><strong>Dias:</strong><br><?php  echo $row[7]?></li>

       
 <li ><strong>Ver:</strong><br><?php echo "<a href='choferesmas.php?s=$id'><img src='ver.png'></a></li> "?>
  <li ><strong>Elim:</strong><br><?php echo "<a href='eli.php?s=$id'><img src='x.png'></a></li> "?>   
</ul>
<hr>
<?php

}}

?>


    

