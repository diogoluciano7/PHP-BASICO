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
       $frase = "Gosto de estudar Matematica! Matematica é muito legal.";
   //  $novafrase = str_replace("matemática","PHP",  $frase);
       $novafrase = str_ireplace("matematica","PHP", $frase);
       echo "$novafrase"; 
    ?>
</div>
</body>
</html>