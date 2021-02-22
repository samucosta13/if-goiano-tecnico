<?php
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login'] == 1){
            header('Location: areasecreta_tarefa.html');
        };
    };

    unset($_SESSION['login']);
?>