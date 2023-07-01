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
      $v = isset($_GET["val"])?$_GET["val"]:1;
      echo "<h2>Calculando o Fatorial de $v </h2>";
      $c = $v;
      $fat = 1;
      do {
        $fat = $fat * $c;
        $c--;
      } while($c >= 1);
      echo "<h2>$v ! = $fat";
    ?>
    <br/>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>