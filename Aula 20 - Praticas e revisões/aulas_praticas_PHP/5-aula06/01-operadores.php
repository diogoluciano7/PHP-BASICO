<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operadores</title>
</head>
<body>
    <div>
        <?php
         $preco = $_GET["p"];
         echo "O preço do produto e R$ " . number_format($preco, 2); 
         $preco += $preco*10/100;
         echo "<br>E o novo preco com 10% de aumento será R$ " . number_format($preco, 2);
        ?>
      </div>
      <br>
      <div>
      <?php
         $preco = $_GET["p"];
         echo "O preço do produto e R$ $preco"; 
         $preco -= $preco*10/100;
         echo "<br>E o novo preco com 10% de desconto será R$ $preco";
        ?>
      </div>
</body>
</html>