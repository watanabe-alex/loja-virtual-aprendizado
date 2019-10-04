<?php
    $nomeSistema = "Cursos do Alex";
    $usuario = ["nome"=>"Alex Watanabe"];
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
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Carrinho de Compras</h1>
                </div>
                <div class="col-12">
                    <div class="row card">
                        <div class="col-12">
                            <h3>Você está comprando o <?php echo $_GET["nomeProduto"]; ?></h3>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <form class="d-flex flex-column p-3" method="post" action="sucesso.php">
                                <input type="text" name="nomeCompleto" placeholder="Digite seu nome">
                                <input type="text" name="cpf" placeholder="Digite seu CPF">
                                <input type="number" name="cartao" placeholder="Digite o número do seu cartão">
                                <input type="date" name="validadeCartao" placeholder="Digite a data de validade">
                                <input type="password" name="codigoCartao" placeholder="Digite o CVV">
                                <button class="btn btn-success" type="submit">Finalizar compra</button>
                            </form>
                        </div>
                    </div>
                </div>   
            </div>
        </section>
    </main>

</body>
</html>