<?php
    $nomeSistema = "Cursos do Alex"
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
    
    <header class="d-flex justify-content-between align-items-center p-3">
        <h1 id="logo">
            <?php echo $nomeSistema?>
        </h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a href="">Login</a></li>
                <li class="nav-item"><a href="">Cursos</a></li>
                <li class="nav-item"><a href="">Cadastrar</a></li>
            </ul>
        </nav>
    </header>






<!-- COMENTADO - DADOS DA AULA (APRENDENDO)
    <?php
        $nome = "Alex Watanabe";
        $idade = 10;
        
        $usuario = ["Alex","Watanabe",32,["musica","café","skate"]];
        var_dump($usuario);

        echo "<br>";
        $usuario[] = "mais uma variável"; //adiciona a informação no final
        var_dump($usuario);

        echo "<br>";
        echo "<h1>".$usuario[0]." ".$usuario[1]."</h1>";

        $usuario2 = ["nome"=>"Alex","sobrenome"=>"Watanabe"];

    
        echo "Meu nome é $nome e eu tenho $idade anos.";
        //var_dump($usuario2["sobrenome"]); 
    ?>
-->


</body>
</html>