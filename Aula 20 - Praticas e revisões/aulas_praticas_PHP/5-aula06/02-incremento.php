<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>02-incremento e decremento</title>
</head>
<body>
    <div>
       <?php
       /* Outro tipo de comentário é o multilinha que é esse */
          $atual = $_GET["aa"]; // comentarios com (//): Essa linha, vai pegar o aono na URL
          echo "O ano atual é $atual e o ano anterior e ". --$atual; #outo tipo de comantario com = (#)
       ?>
    </div>
</body>
</html>