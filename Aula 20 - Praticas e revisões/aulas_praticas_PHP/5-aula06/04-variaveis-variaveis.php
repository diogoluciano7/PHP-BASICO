<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>04-Variaveis de Variáveis</title>
</head>
<body>
    <div> 
        <?php
          $x = "abc";
          $$x = "def";
          echo "O conteudo da variável X é $x";
          echo "<br>A variável ABC criada recebeu o valor $abc";
        ?>
    </div>
</body>
</html>