<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <form method="get" action="exercicio01.php">
     Numero: <input type="number" name="num">
     <fieldset><legend>Operação</legend>
         <input type="radio" name="oper" id="dobro" value="1" checked>     
         <label for="dobro">Dobro</label>
         <input type="radio" name="oper" id="cubo" value="2">
         <label for="cubo">Cubo</label>
         <input type="radio" name="oper" id="raiz" value="3">
         <label for="raiz">Raiz Quadrada</label>
     </fieldset>
     <input type="submit" class="botao" value="Calcular">
  </form>
</div>
</body>
</html>