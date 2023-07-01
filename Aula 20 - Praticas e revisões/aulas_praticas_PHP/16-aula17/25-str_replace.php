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
  //  $frase = "Gosto de estudar Matemática!!!";
 //  $novafrase = str_replace("matemática","PHP",$frase);
//       echo "$novafrase";

//    $frase = "Gosto de estudar Matemática!!!";
//  $novafrase = str_ireplace("matemática","PHP",$frase);
//    echo "$novafrase";

$frase = "Gosto de estudar Matemática! Matemática é super legal";
$novafrase = str_ireplace("matemática","PHP",$frase);
echo "$novafrase";
    ?>
</div>
</body>
</html