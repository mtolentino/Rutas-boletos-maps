	<!Doctype html>
<html>
  <head>
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-1.9.1.min.js"></script>
    <script src="cod.js"></script>
   

 </head>
	<div class="mapa" style="text-align:center ;">
	
	<form class="registro" method="post" action="reg.php">
	<ul >
		<li ><strong class="left" >Nombre completo:</strong><br>
		<input class='search2' required  name='nombre' ></li>

		<li ><strong class="left"  >Nick:</strong><br>
			<input class='search2' required name='nick' ></li>
		<li><strong>Contraseña:<br>
			<input class='search2' required  name='pass' type="password">
		</strong></li>
		<li><strong>Fecha nacimiento:<br>
			<input class='search2'  type='date' name='fecha'required>
		</strong></li>
		<li>
			<input class="enviar" type="submit">
		</li>
	</ul>
	</form>
	<img class="usa" src="USA.png">

	</div>