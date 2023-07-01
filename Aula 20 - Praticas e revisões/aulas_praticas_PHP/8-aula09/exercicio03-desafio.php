<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio03 desafio da media da notas if e else</title>
</head>
<body>
<div>
        <form method="get" action="exercicio03-desafio.php">
          Nota 1:
         <input type="number" placeholder="1 digitos" name="nota_1"><br>
          Nota 2:
         <input type="number" placeholder="1 digitos" name="nota_2"><br>
         <input type="submit" value="Calcular Média">
        </form>
    </div>
    <div>
        <?php
          $n1 = isset($_GET["nota_1"])?$_GET["nota_1"]:0;
          $n2 = isset($_GET["nota_2"])?$_GET["nota_2"]:0;
          $media = ($n1 + $n2) / 2;
          
          $n1 = number_format((float)$n1, 1);
          $n2 = number_format((float)$n2, 1);
          $media = number_format((float)$media, 1);

          echo "<br>A media entre $n1 e $n2 é igual a $media.";

          if ($media<5) {
            $sit = "Reprovado";
          }elseif ($media >= 5 && $media<= 7) {
            $sit = "Recuperação";
          }else {
            $sit = "Aprovado";
          }

          echo "<br>Situação do aluno: $sit<br>";
        ?>
    </div>
</body>
</html>