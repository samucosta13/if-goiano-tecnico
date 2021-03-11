<?php

    setcookie("name", "Sam", time()+3600);
    setcookie("email", "samuel.oliveira@estudante.ifgoiano.edu.br");
    setcookie("busca", "Geladeira");
    
    // quando não usa parâmetro de tempo no cookie, ele expira quando a sessão acaba

    var_dump($_COOKIE);

?>