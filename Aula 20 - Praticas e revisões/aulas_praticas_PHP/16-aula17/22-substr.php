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
      $site = "Curso em Vídeo";
      $sub = substr($site,0,5);
      print($sub);
      print(substr($site,9,5));
    ?>
</div>
</body>
</html