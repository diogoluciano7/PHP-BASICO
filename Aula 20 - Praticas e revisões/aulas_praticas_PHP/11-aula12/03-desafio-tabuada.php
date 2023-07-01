<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    h1 {
        font: 20pt arial;
    }
  </style>
</head>
<body>
<div>
    <?php
     $n = isset($_GET["val"])?$_GET["val"]:0;
     $c = 1;
     echo "<h2>Tabuada do <span class='foco'>$n</span></h2>";
    do {
      $m = $n * $c;
      echo "<span class='foco'>$n</span> X<span class='foco'>$c</span> = <span class='foco'>$m</span></br>";
    } while ($c <= 10);
    ?>
    <a href="03-desafio-tabuada" class="botao">Voltar</a>
</div>
</body>
</html>
 