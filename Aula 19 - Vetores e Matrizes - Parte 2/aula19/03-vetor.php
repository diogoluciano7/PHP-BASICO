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
       $v = array("A", "J", "M", "X", "K");
       print_r($v);
   //  array_unshift($v, "O");//array_unshift = insere no inicio
       array_shift($v);//array_shifit = elimina o primeiro.
       print_r($v);
    ?>
    </pre>
</div>
</body>
</html>

