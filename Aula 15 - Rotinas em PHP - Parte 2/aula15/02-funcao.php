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
    include "funcoes.php"; //testando include
    echo "<h1>Testando novas funcões</h1>";
    ola();  
    mostraValor(4);
    echo "<h2>Finalizando Programa...</h2>";
//------------------------------------------------//
/*  include "funcoes2.php"; //testando include
    echo "<h1>Testando novas funcões</h1>";
    ola();  
    mostraValor(4);
    echo "<h2>Finalizando Programa...</h2>"; */
//------------------------------------------------//
/* require "funcoes2.php"; //testando o require
echo "<h1>Testando novas funcões</h1>";
ola();  
mostraValor(4);
echo "<h2>Finalizando Programa...</h2>" */

    ?>
</div>
</body>
</html>