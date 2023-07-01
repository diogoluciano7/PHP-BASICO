<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
    h2 {
      font: 15pt Arial;
      color: #171559;
      font-weight: bold;
    }
  </style>
</head>
<body>
<div>
    <?php
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];
      echo "<h2>Valores recebidos: $v1 e $v2</h2>";
      echo "O valor absoluto de $v2 e ". abs($v2);
      echo "<br>O valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
      echo "<br/>A raiz de $v1 e ". sqrt($v1);
      echo "<br/>O valor de $v2 arrendondado é ". round($v2); //ceil = arredonda para cima,o floor = arredonda para baixo.ambos substitui o round.
      echo "<br/>A parte inteira do $v2 é ". intval($v2);
      echo "<br/>O valor de $v1 em moeda é ". number_format($v1,2,",",".");
    ?>
</div>
</body>
</html>
 