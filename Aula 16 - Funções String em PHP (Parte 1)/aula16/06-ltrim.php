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
       $nome = "   josé da silva   ";
       echo(strlen($nome));
       echo "<br/>";
       $novo = ltrim($nome);
       echo($novo);
       echo "<br/>";
       echo(strlen($novo));
    ?>
</div>
</body>
</html>