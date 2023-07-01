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
      $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
      $fim = isset($_GET["fim"])?$_GET["fim"]:0;
      $incremento = isset($_GET["incremento"])?$_GET["incremento"]:0;

      if ($inicio < $fim) {
         while ($inicio <= $fim) {
            echo "$inicio - ";
            $inicio += $incremento;
         }
      }else {
        while ($inicio >= $fim) {
            echo "$inicio - ";
            $inicio -= $incremento;
        }
      }
    ?>
    <br>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>