<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
  <div>
     <form action="03-tabuada.php" method="get">
      N&uacute;mero:
      <select name="num">
      <?php
         $i = 1;
         do {
            echo "<option>$i</option>";
            $i++;
         } while ($i <= 10);
         ?>
         </select>
        <input type="submit" value="Tabuada" class="botao">
     </form>
  </div>
</body>
</html>