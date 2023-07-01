<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="03exercicio.php">
        Inicio:
        <input type="number" name="inicio" min="0" max="100" value="0"><br>
        Fim:
        <input type="number" name="fim" min="0" max="100" value="0"><br>
        incremento:
        <select name="incremento">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select><br>
        <input type="submit" value="Contar" class="botao">
    </form>
</div>

<div>
    <?php
      $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
      $fim = isset($_GET["fim"])?$_GET["fim"]:0;
      $incremento = isset($_GET["incremento"])?$_GET["incremento"]:0;

      if ($inicio < $fim) {
         while ($inicio <= $fim) {
            echo "$inicio";
            $inicio += $incremento;
         }
      }else {
          while ($inicio >= $fim) {
            echo "$inicio";
            $inicio -= $incremento;
          }
      }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltr</a>
</div>
</body>
</html>