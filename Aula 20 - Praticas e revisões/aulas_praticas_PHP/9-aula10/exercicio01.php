<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01 - PHP</title>
</head>
<body>
    <div>
     <form method="get" action="exercicio01.php">
        numero: <input type="number" name="num"/><br>
         <fieldset><legend>Operação</legend>
            <input type="radio" name="oper" id="dobro" value="1" checked>
            <label for="dobro">Dobro</label>
            <input type="radio" name="oper" value="2" id="cubo">
            <label for="cubo">Cubo</label>
            <input type="radio" name="oper" value="3" id="raiz">
            <label for="raiz">Raiz Quadrada</label>
         </fieldset>

        <input type="submit" class="botao" value="Calcular">
    </form>
  </<div>

  <div>
     <?php
       $n = isset($_GET["num"])?$_GET["num"]:0;
       $o = isset($_GET["oper"])?$_GET["oper"]:1;
       switch ($o) {
        case 1:
            $r = $n * 2;
            break;
        case 2:
            $r = pow($n,3);
            break;
        case 3:
            $r = sqrt($n); // $n ^ (1/2);
       }

      echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
     ?>
     <a href="exercicio01.html" class="botao">Voltar</a>
  </div>
</body>
</html>