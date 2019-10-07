<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    
    <?php include("header.php"); ?>

    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
                
                <?php if(isset($produtos) && $produtos != []){?> <!-- se existir produto -->

                    <!-- imprime todos os produtos do array na tela -->
                    <?php foreach ($produtos as $produto) {?>
                        <div class="col-lg-3 card text-center">
                            <h2 class="card-title"><?php echo $produto["nome"];?></h2>
                            <img src=<?php echo $produto["img"]?> class="card-img-top" alt="..."/>  
                            <div class="card-body">                
                                <h5 class="card-text"><?php echo number_format($produto["preco"],2,',','.')?></h5>
                                <a href="carrinho.php?nomeProduto=<?php echo $produto["nome"];?>" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    <?php }?>

                <?php }else{ ?> <!-- se não existir produto -->

                    <h2>Não existem produtos cadastrados :(</h2>

                <?php } ?>

            </div>
        </section>
    </main>

</body>
</html>