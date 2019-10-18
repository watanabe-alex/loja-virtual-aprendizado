<?php
    //deslogando usuário
    session_start();
    session_destroy();
    header('Location: index.php');

?>