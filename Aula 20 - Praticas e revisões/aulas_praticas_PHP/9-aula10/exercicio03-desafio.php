<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Exercicio03-Regiões PHP</title>
</head>
<body>
    <div>
        <form method="get" action="exercicio03.php">
          <fieldset><legend>Região</legend></fieldset>  
            <label for="Estados">Estado</label>
             <select name="estado" id="estado">
               <option value="1">Acre</option>
               <option value="2">Alagoas</option>  
               <option value="1">Amapá</option>
               <option value="1">Amazonas</option>
               <option value="2">Bahia</option>
               <option value="2">Ceará</option>
               <option value="3">Distrito Federal</option>
               <option value="4">Espirito Santo</option>
               <option value="3">Goiás</option>
               <option value="2">Maranhão</option>
               <option value="3">Mato Grosso</option>
               <option value="3">Mato Grosso do Sul</option>
               <option value="4">Minas Gerais</option>
               <option value="1">Pará</option>
               <option value="2">Paraiba</option>
               <option value="5">Paraná</option>
               <option value="2">Pernanbuco</option>
               <option value="2">Piauí</option>
               <option value="4">Rio de Janeiro</option>
               <option value="2">Rio Grande do Norte</option>
               <option value="5">Rio Grande do Sul</option>
               <option value="1">Rondônia</option>
               <option value="1">Roraíma</option>
               <option value="5">Santa Catarina</option>
               <option value="4">São Paulo</option>
               <option value="2">Sergipe</option>
               <option value="1">Tocantins</option>
          <input type="submit" value="Verificar" class="botao">
        </form>
    </div>

    <div>
        <?php
        $estado = isset($_GET["estado"])?$_GET["estado"]:0;
        
        switch ($estado) {
            case 1 :
              $reg = "REGIÃO NORTE.";
                break;
            case 2:
              $reg = "REGIÃO NORDESTE.";
                break;
            case 3:
              $reg = "REGIÃO CENTRO OESTE.";
                break;
            case 4:
              $reg = "REGIÃO SUDESTE.";
                break;
            case 5:
              $reg = "REGIÃO SUL.";
                break;
            default:
              $reg = "REGIÃO INVALIDA";
        }
        echo "Você está na $reg.";
        
       ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>