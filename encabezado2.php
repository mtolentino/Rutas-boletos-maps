<!Doctype html>
<html>
  <head>
    <title></title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <meta  charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-1.9.1.min.js"></script>
     <script type="text/javascript">
  $(document).ready(function() {
    $('li').click(function () {
        var url = $(this).attr('rel');
        $('#iframe').attr('src', url);
        $('#iframe').reload();
    });
});


    </script>
   

 </head>
 <header>
  <?php  
   $nick=$_SESSION['nick'];
   ?>
  <a href="index.php"><img width='100%'src="logo.png"></a>
 	<div>
 	<li id='nick' ><?php echo $nick;  ?></li>
 	<li id='entrar'><a href="logout.php">Cerrar sesion</a></li>
 	</div>
 </header>
 <body style="background:#CEDEF2;">