<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio02-Dias da semana</title>
</head>
<body>
  <div>
    <form method="get" action="exercicio02.php">
       Dia da semana : <input type="number" name="ds" min="2" max="8" required>
       <input type="submit" class="botao" value="Analisar"> 
    </form>
  <div>
    <div>
        <?php
          $d =isset($_GET["ds"])?$_GET["ds"]:0;
          switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8:
                echo "Descanse , pequeno gafanhoto! ;)";
                break;
            default:
                echo "Dia da semana invalido";
          }

        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>