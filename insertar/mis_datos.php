<?PHP

include ("conexion.php");
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
if(isset($_POST['apellidos']) && !empty($_POST['apellidos']) &&
if(isset($_POST['numruta']) && !empty($_POST['numruta']) &&
if(isset($_POST['nomruta']) && !empty($_POST['nomruta']) &&
if(isset($_POST['creacion']) && !empty($_POST['creacion']) &&
if(isset($_POST['coment']) && !empty($_POST['coment']) &&

$con = mysql_connect(DB_SERVER,DB_NAME,DB_USER,DB_PASS);
mysql_select_db($DB_NAME,$con)or die("problema al conectar la BD");
{
mysql_query("INSERT INTO newrutas (nombre, apellidos, numruta, nomruta, creacion, coment)
VALUES ('$_POST[nombre]','$_POST[apellidos]','$_POST[numruta]','$_POST[nomruta]','$_POST[creacion]','$_POST[coment]')",$con);

echo "datos insertados correctamente"

}else{
echo "problema al insertar los datos";
}
?>