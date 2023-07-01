<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <?php
     $n = isset($_GET["num"])?$_GET["num"]:1;
     for ($i=1; $i <= 10 ; $i++) { 
        $r = $n * $i;
        echo "$n x $i = $r <br>";
     }
  ?>
  <br><a href="javascript:history.go(-1)"> Voltar</a>
</div>
</body>
</html>