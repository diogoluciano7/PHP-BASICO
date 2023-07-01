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
      echo "<h2>Mostrando a Tabuada de $n <h2/>";
      $c = 1;
      do {
        $r = $n * $c;
        echo "$n x $c = $r <br/>"; 
        $c++;
      } while ($c <= 10);
    ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>