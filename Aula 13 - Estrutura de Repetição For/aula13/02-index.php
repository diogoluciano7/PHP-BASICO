<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="02-tabuada.php" method="get">
       <select name="num">
          <?php
             for ($c=0; $c <= 10 ; $c++) { 
                 echo "<option>$c</option>";
             }
          ?>
       </select>
       <input type="submit" value="Tabuada" class="botao"/>
    </form>
</div>
</body>
</html>