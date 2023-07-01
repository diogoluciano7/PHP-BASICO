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
      $atual = $_GET["aa"];
      echo "O ano atual e $atual e o ano anterior e ". $atual--;  

      echo "<br>O ano atual e $atual e o ano anterior e ". --$atual; 

      // tipos de comentario
      // Essa linha é um comentario.
      # Essa linha também.
      /*comentário multilinha */
    ?>
</div>
</body>
</html>
 