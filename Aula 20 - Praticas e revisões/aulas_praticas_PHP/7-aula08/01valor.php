<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>01-valor</title>
</head>
<body>
    <div>
       <?php
         $valor = $_GET["v"];
         $rq = sqrt($valor);
         echo "A RAIZ DE $valor E IGUAL A $rq ". number_format($rq,2);
       ?>
       <a href="<br/>01exercicio.html">Voltar</a>
    </div>
</body>
</html>