<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
   <form method="get" action="02-parte1.php">
      Valor 1: <input type="number" name="url" max="100"
      min="0" value="0"> <br>
      <input type="submit" value="Enviar" class="botao">
   </form>
</div>
<div>
    <?php
        $i = 1; //1°while pega os dados da url
        while ($i <= 5){
          echo $v = "num".$i;
          $url = "v".$i;
          $$v = isset($_GET[$url])?$_GET[$url]:0;
          $c++;
        }
        echo "$num1 $num2 $num3 $num4 $num5.";//assim fica inline 
     /*   $i = 1; //este dados mostra os dados pegos pela url
        while ($a <= 5) {
            $v = "num".$i;
            echo "Valor $i:".$$v."<br/>";
            $i++;
        } */
    ?>
     
</div>
</body>
</html>