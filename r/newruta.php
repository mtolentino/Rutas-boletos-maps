<?PHP
if ($enviar) {
echo "Hola <b>" . $nombre . "</b> que tal estás<BR>\n";
echo "Eres " . $sexo . "<BR>\n";
echo "Tienes " . $edad . "<BR>\n";
echo "Tu sistema favorito es " . $sistema . "<BR>\n";
if ($futbol) {
echo "Te gusta el futbol <BR>\n";
} else {
echo "NO te gusta el futbol <BR>\n";
}
if ($aficiones != "") {
echo "Tus aficiones son: <BR>\n";
echo nl2br($aficiones);
} else {
echo "NO tienes aficiones <BR>\n";
}
echo "<a href='$PHP_SELF'>VOLVER AL FORMULARIO</a>"
 
} else {
<HTML>
<BODY>
<FORM METHOD="post" ACTION="<?PHP echo $PHP_SELF ?>">
<input type="hidden" name="edad" value="55">
<p>Tu nombre <input type="text" name="nombre" size="30" nombre" size="30" value="jose"></p>
<p>Tu sistema favorito 
<select size="1" name="sistema">
<option selected value="Linux">Linux</option>
<option value="Unix">Unix</option>
<option value="Macintosh">Macintosh</option>
<option value="Windows">Windows</option>
</select></p>
<p>¿Te gusta el futbol ? <input type="checkbox" name="futbol" value="ON"></p>
<p>¿Cual es tu sexo?</p>
<blockquote>
<p>Hombre<input type="radio" value="hombre" checked name="sexo"></p>
<p>="codigo" style="margin-left: 100"><p>Mujer <input type="radio" name="sexo" value="mujer"></p>
</blockquote>
<p>Aficiones</p>
<p><textarea rows="5" name="aficiones" cols="28"></textarea></p>
<p><input type="submit" value="Enviar datos" name="enviar"> 
<input type="reset" value="Restablecer" name="B2"></p>
</FORM>
</BODY>
</HTML>
?>
 
<?PHP
} //fin IF
?>