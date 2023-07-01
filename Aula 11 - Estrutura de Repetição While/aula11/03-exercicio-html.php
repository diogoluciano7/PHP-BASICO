<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="03-exercicio.php" method="get">
    Inicio: 
    <input type="number" name="inicio" min="0" max="100" value="0"><br/>
    Final: 
    <input type="number" name="fim" min="0" max="100" value="0"><br>incremento:
     <select name="incremento" requered="">
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
    </select><br/>
    <input type="submit" value="contar" class="botao">
    </form>
</div>
</body>
</html>