<?php
    $usuario = ["email"=>"alex@alex.com.br",
                "senha"=>'$2y$10$v9lZoRjmHWlx0v8Kfkv4LuowN0s7d55jNVODXxZF2K1iA4s.JWjXy'];

    if($_POST){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        //verifica e-mail
        if ($email == $usuario["email"]) {
            //verifica senha
            if (password_verify($senha, $usuario["senha"])) {
                session_start();
                $_SESSION["usuario"] = ["nome"=>"Alex W."];  //na verdade essa informação deveria vir do banco de dados
                
                header("Location: index.php");
            } else {
                echo "Email ou senha inválidas.";
            }
        } else {
            echo "Email ou senha inválidas.";
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

    <?php include_once("header.php"); ?>
    
    <main class="d-flex justify-content-center align-items-center p-5">
        <form action="" method="post" class="card p-3">
            <div class="form-group">
                <label for="id-email">E-mail</label>
                <input type="email" name="email" id="id-email" class="form-control" require>
            </div>
            <div class="form-group">
                <label for="id-senha">Senha</label>
                <input type="password" name="senha" id="id-senha" class="form-control" require>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success" type="submit">Logar</button>
            </div>
        </form>
    </main>
    
</body>
</html>