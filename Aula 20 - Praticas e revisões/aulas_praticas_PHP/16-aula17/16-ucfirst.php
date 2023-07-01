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
    //   $nome = "luciano lopes";
    //   print("Seu nome é ".ucfirst($nome));

    $nome = "LuciAno LopEs";
    $nome2 = ucfirst(strtolower($nome));
    echo "Seu nome e $nome2";
    ?>
</div>
</body>
</html