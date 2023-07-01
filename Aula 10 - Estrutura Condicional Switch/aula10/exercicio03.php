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
      $estado = isset($_GET["estado"])?$_GET["estado"]:0;
      
      switch ($estado) {
        case 1 :
           echo "Você mora na <span class='foco'>Região Norte<span/>";
          break;
        case 2 :
           echo "Você mora na <span class='foco'>Região Nordeste<span/>";
          break;
        case 3 :
           echo "Você mora na <span class='foco'>Região Sul<span/>";
          break;
        case 4 :
           echo "Você mora na <span class='foco'>Região Sudeste<span/>";
          break;
        case 5 :
           echo "Você mora na <span class='foco'>Região Centro Oeste<span/>";
          break;
        default:
          # code...
          break;
      }
    ?>
    <br>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>