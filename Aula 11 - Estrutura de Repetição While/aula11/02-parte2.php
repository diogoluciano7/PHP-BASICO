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
     $i = 1;
     while ($i <= 5) {
        $v = "num". $i;
        $url = "v". $i;
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
        $i++;
     }
    echo " $num1<br> $num2<br> $num3<br> $num4<br> $num5<br> ";

 /*  $i = 1;
     while ($i <= 5) {
        $v = "num".$i;
        echo "valor $i : " . $$v . "<br/>";
        $i++;
     } */
   ?>     
   <br>
   <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>