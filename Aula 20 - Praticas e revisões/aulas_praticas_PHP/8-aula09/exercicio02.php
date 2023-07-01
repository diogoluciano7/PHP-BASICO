<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exericicio 01 - if - else PHP</title>
</head>
<body>
<div>
        <form method="get" action="exercicio02.php">
            Ano de Nascimento:
            <input type="number" placeholder="4 digitos" name="ano">
            <input type="submit" value="Verificar">
        </form>
   
        <?php
          $a = isset($_GET["ano"])?$_GET["ano"]:1900;
          $i = date("Y") - $a;
          echo "Voce nasceu em $a e tera $i anos.";
          if ($i < 16) {
             $tipoVoto = "não vota";
          }
          elseif (($i >= 16 && $i < 18) || ($i>65)) {
                $tipoVoto = "voto opcional";
            }
            else {
            $tipoVoto = "voto obrigatorio";
            }
            
          echo "<br>Para essa idade, $tipoVoto";
        ?>
    </div>
</body>
</html>