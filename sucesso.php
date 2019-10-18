<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sucesso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

    <?php
        include_once("header.php"); 
        include("config/validacoes.php");
        
        //pegando informações do formulário
        $nomeUsuario = $_POST["nomeCompleto"];
        $cpf = $_POST["cpf"];

        //validando informações
        validaNome($nomeUsuario);
        validaCPF($cpf);

        if (count($erros)==0){
            echo "<h1>Olá $nomeUsuario, a sua compra foi realizada com sucesso! :)</h1>";
        } else {
            echo "<h2>Não foi possível concluir a sua compra! :(</h2>";
            foreach ($erros as $erro){
                echo "$erro<br>";
            }
            
        }
        
    ?>

</body>
</html>