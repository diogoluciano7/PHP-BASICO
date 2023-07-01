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
       $nome = "Lopes";
       $novo = str_pad($nome, 30," ",STR_PAD_RIGHT);
   //  $novo = str_pad($nome, 30," ",STR_PAD_CENTER);
  //   $novo = str_pad($nome, 30," ",STR_PAD_LEFT);
       print("Meu professor $novo é lindo!");
    ?>
</div>
</body>
</html>