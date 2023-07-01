<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
       $v = array( 1=>5,
                   3=>9,
                   6=>8,
                   8=>7);
       $v [] = "E"; // aloca o indice
       unset($v[6]); // tira o indice [6]
       print_r($v);  
    ?>
    </pre>
</div>
</body>
</html>