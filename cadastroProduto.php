<?php
    function cadastraProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
        $nomeArquivo = "produto.json";
        if (file_exists($nomeArquivo)){

        } else {
            $produtos = [];
            $produtos[] = ["nome"=>$nomeProduto,
                           "desc"=>$descProduto,
                           "imagem"=>$imgProduto,
                           "preco"=>$precoProduto];
            var_dump($produtos);
        }
    }


    if($_POST){
        cadastraProduto($_POST["nomeProduto"], $_POST["descProduto"], $_POST["imgProduto"], $_POST["precoProduto"]);
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    
    <?php include_once("header.php"); ?>

    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Cadastro de Produto</h1>
            </div>
            <div class="col-12">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeProduto" placeholder="Nome do produto"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="descProduto" placeholder="Descrição do produto"/>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="imgProduto" placeholder="Imagem do produto"/>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="precoProduto" placeholder="Preço do Produto"/>
                    </div>
                    <button class="btn btn-success">Cadastrar Produto</button>
                </form>
            </div>
        </div>
    </main>


</body>
</html>