<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
   <form method="get" action="02-fatorial.php">
        Valor: <input type="number" name="val" min="0" max="15" value="1"/>
        <input type="submit" value="Fatorial">
   </form>
</div>
<div>
    <?php
        $v = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h1>Calculando o Fatorial de $v </h1>";
        $c = $v;
        $fat = 1;
        do {
          $fat = $fat * $c;
          $c--;
        } while ($c >= 1);
        echo "<h2>$v ! = $fat";
    ?>
    <br>
    <a href="02-fatorial.php" class="botao" >Voltar</a>
</div>
</body>
</html>
 