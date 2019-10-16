<?php

    function cadastraProduto($nomeProduto, $descProduto, $imgProduto, $precoProduto){
        
        $nomeArquivo = "produto.json";
        if (file_exists($nomeArquivo)){
            $arquivo = file_get_contents($nomeArquivo);
            //transofrmando em array
            $produtos = json_decode($arquivo, true);
        } else {
            $produtos = [];
        }

        //adiciona novos produtos
        $produtos[] = ["nome"=>$nomeProduto,
                       "desc"=>$descProduto,
                       "imagem"=>$imgProduto,
                       "preco"=>$precoProduto];
        
        //transformando array em json e criando arquivo
        $json = json_encode($produtos);
        $sucesso = file_put_contents($nomeArquivo, $json);

        if($sucesso){
            return "Deu certo brother!";
        } else {
            return "Não deu bom!";
        }

    }

    
    if($_POST){
        
        //salvando arquivo imagem
        $nomeImg = $_FILES["imgProduto"]["name"];
        $localTmp = $_FILES["imgProduto"]["tmp_name"];
        $dataAtual = date("Ymd");
        $caminhoSalvo = "img/".$dataAtual.$nomeImg;

        $deuCerto = move_uploaded_file($localTmp, $caminhoSalvo);
        //exit;
        echo cadastraProduto($_POST["nomeProduto"], $_POST["descProduto"], $caminhoSalvo, $_POST["precoProduto"]);
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
                <form action="" method="post" enctype="multipart/form-data">
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