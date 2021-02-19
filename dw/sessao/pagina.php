<?php
    session_start();

    $nome = "Samuel";
    $senha = "4444";

    if($nome == "Samuel" && $senha == "4444"){
        $_SESSION['login'] = true;
        header('Location: areasecreta.php');
    }else{
        echo "Você não está logado!";
    }

    // Sessões permitem que os valores das variáveis sejam salvos para serem usadas durante a navegação do usuário.
?>