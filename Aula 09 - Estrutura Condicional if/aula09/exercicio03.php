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
       $nota1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
       $nota2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
       $media = ($nota1 + $nota2) / 2;

       $nota1 = number_format((float)$nota1, 1);
       $nota2 = number_format((float)$nota2, 1);
       $media = number_format((float)$media, 1);

       echo "<br>A Média entre $nota1 e $nota2 é igual a $media ";

       if ($media < 5) {
          $sit = "Reprovado!";
       }
       elseif ($media > 5 && $media <= 7) {
          $sit = "Recuperação!";
       } 
       else {
          $sit = "Aprovado";
       }

       echo "<br>Situação do aluno: $sit";
    ?>
    <br>
    <a href="exercicio-html-03.php">Voltar</a>
</div>
</body>
</html>