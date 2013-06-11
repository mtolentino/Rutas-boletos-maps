
<h2>Lista boletos</h2>
<?php
 session_start();
 $usu=$_SESSION['nombre'] ;

include("encabezado4.php");include ("conexion.php");


$sql=mysql_query("SELECT * FROM rutauser where user='$usu'",$con);

if (mysql_num_rows($sql) > 0) {
       
    while ($row = mysql_fetch_row($sql)) {
 ?>  
 <ul class="chof" style="color:black;"> 
  <li ><strong>Ruta:</strong><br><?php  $id=$row[5] ;echo $row[0];?></li>
 
  <li ><strong>Dia:</strong><br><?php  echo $row[4]?></li>  
 

       
 <li ><strong>Ver:</strong><br><?php echo "<a href='printmia.php?s=$id'><img src='ver.png'></a></li> "?>

</ul>
<hr>
<?php

}}

?>


    

