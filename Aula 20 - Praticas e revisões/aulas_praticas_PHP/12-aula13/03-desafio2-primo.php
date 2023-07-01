<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        h1 {font: 20pt Arial;}
        h2 {font: 18pt Arial;}
    </style>
</head>
<body>
    <div>
        <?php
          $n = isset($_GET["num"])?$_GET["num"]:0;
          echo "<h1>Analisando o N&uacute;mero $n ...</h1>";
          echo "Valores M&uacute;ltiplos: ";
          $mult = 0;
          for ($c=1; $c <= $n ; $c++) { 
             if ($n % $c == 0) {
                  $mult++;
                  echo "$c ";
             }
          }
          echo "<p> Total de multiplos: $mult </p>";
          echo "<h2> Resultado: $n <span class='foco'>";
          if ($mult <= 2) {
             echo "&Eacute; PRIMO!";
          } else {
             echo "N&Atilde;O &Eacute; PRIMO!";
          }
          echo "</span></h2>";
        ?>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>