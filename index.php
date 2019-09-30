<?php
    $nomeSistema = "Cursos do Alex";
    $usuario = ["nome"=>"Alex Watanabe"];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>
    
    <header class="navbar">
        <h1 id="logo">
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
    </header>

    <main>
        <section class="container mt-4">
            <div class="row justify-content-around">
                
                <div class="col-lg-3 card text-center">
                    <h2 class="card-title">Curso 1</h2>
                    <img src="img/curso1.png" class="card-img-top" alt="..."/>  
                    <div class="card-body">                
                        <h5 class="card-text">R$ 15,00</h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
               
                <div class="col-lg-3 card text-center">
                    <h2 class="card-title">Curso 1</h2>
                    <img src="img/curso1.png" class="card-img-top" alt="..."/>  
                    <div class="card-body">                
                        <h5 class="card-text">R$ 15,00</h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

                <div class="col-lg-3 card text-center">
                    <h2 class="card-title">Curso 1</h2>
                    <img src="img/curso1.png" class="card-img-top" alt="..."/>  
                    <div class="card-body">                
                        <h5 class="card-text">R$ 15,00</h5>
                        <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                </div>

            </div>
        </section>
    </main>

</body>
</html>