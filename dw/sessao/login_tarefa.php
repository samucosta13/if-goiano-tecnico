<?php
    session_start();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $usuario1 = 'samuca';
    $senha1 = '4444';

    if($usuario == $usuario1 && $senha == $senha1){
        $_SESSION['login'] = 1;
        header('Location: areasecreta_tarefa.php');
    };
?>