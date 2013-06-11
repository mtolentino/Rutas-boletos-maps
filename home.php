
  <?php
  session_start();
 $id=$_SESSION['id'];
 $nick=$_SESSION['nick'];

  if ($id<=0) {
    print "acceso denegado";
  } else
  {
    include("encabezado2.php");

  ?>
    <script type="text/javascript">
  $(document).ready(function() {
    $('li').click(function () {
        var url = $(this).attr('rel');
        $('#iframe2').attr('src', url);
        $('#iframe2').reload();
    });
});


    </script>
    <?php if ($nick=='admin'){?>
<ul class="main" style="background: #FF530D;color:white;box-shadow: 1px 1px 10px #2d2d2d;">
  <li id ="w1"rel="crutas.php">Registrar rutas</li>
    <li id="w2" rel="cchofer.php">Registrar chofer </li>
    <li id="w3"  rel="choferes.php">Choferes </li>
     <li id="w3"  rel="rutas.php">Rutas </li>
     <li id="w3"  rel="yomiaspro.php">Corridas </li>
</ul>



        <iframe  id="iframe" class="iframe2" src="rutas.php" scrolling="no" ></iframe>



    </body>
    </html>
    <?php  } elseif($nick<>'admin') {?>

    <ul class="main" style="background: #FF530D;color:white;box-shadow: 1px 1px 10px #2d2d2d;">
  <li id ="w1"rel="yorutas.php">Rutas</li>
    <li id="w2" rel="yomias.php">Mis Rutas </li>
  
</ul>



        <iframe  id="iframe" class="iframe2" src="yorutas.php" scrolling="no" ></iframe>



    </body>
    </html>
    <?php  }} ?> 