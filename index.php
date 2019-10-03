<?php
    $nomeSistema = "Cursos do Alex";
    $usuario = ["nome"=>"Alex Watanabe"];
    $produtos = [
        ["nome"=>"Curso Front-End", "preco"=>1200.00, "curacao"=>"5 meses", "img"=>"fe.png"],
        ["nome"=>"Curso PHP", "preco"=>1000.00, "duracao"=>"3 meses", "img"=>"php.png"],
        ["nome"=>"Curso Python", "preco"=>3000.00, "duracao"=>"6 meses", "img"=>"python.png"],
        ["nome"=>"Curso Django", "preco"=>2500.00, "duracao"=>"2 meses", "img"=>"django.png"],
        ["nome"=>"Curso Laravel", "preco"=>1500.00, "duracao"=>"3 meses", "img"=>"laravel.png"]
    ];
    $categorias = ["Cursos", "Palestras", "Artigos"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    
    <header>
        <div class="navbar">
            <h1>
                <?php echo $nomeSistema?>
            </h1>
            <nav>
                <ul class="nav">

                    <?php if(isset($usuario) && $usuario!=[]) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                        </li>
                    <?php } else {?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastro</a>
                        </li>
                    <?php }?>

                </ul>
            </nav>
        </div>

        <nav class="navbar bg-dark">
            <ul class="nav">
                <?php if(isset($categorias) && $categorias != []){?> <!-- se existir categorias -->
                    <?php foreach ($categorias as $categoria) {?>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><?php echo $categoria ?></a>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </nav>

    </header>



    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
                
                <?php if(isset($produtos) && $produtos != []){?> <!-- se existir produto -->

                    <!-- imprime todos os produtos do array na tela -->
                    <?php foreach ($produtos as $produto) {?>
                        <div class="col-lg-3 card text-center">
                            <h2 class="card-title"><?php echo $produto["nome"]?></h2>
                            <img src=<?php echo "img/".$produto["img"]?> class="card-img-top" alt="..."/>  
                            <div class="card-body">                
                                <h5 class="card-text"><?php echo number_format($produto["preco"],2,',','.')?></h5>
                                <a href="#" class="btn btn-primary">Comprar</a>
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