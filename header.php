<?php include("variaveis.php"); ?>

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