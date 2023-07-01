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
      $valor = $_GET["v"];
      $rq = sqrt($valor);
      echo "A raiz de $valor é igual $rq";  
      echo "<br>A raiz de $valor é igual a ". number_format($rq,2);
    ?>
    <br>
    <a href="01exercicio.php">Voltar</a>
</div>
</body>
</html>