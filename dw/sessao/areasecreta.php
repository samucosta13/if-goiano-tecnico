<?php
    session_start();

    if(isset($_SESSION['login'])){
        if($_SESSION['login'] = true){
            echo "<html>
                    <body style='background-color:#333;color:#fff;'>
                        <p>
                            Você está na área secreta!
                        </p>
                    </body>
                  </html>";
        }else{
            {
            echo "<html>
                    <body style='background-color:#333;color:#fff;'>
                        <p>
                            Você não pode acessar esta página
                        </p>
                    </body>
                  </html>";
            }
    }
        };

    unset($_SESSION['login']);
    // encerra automaticamente a sessão de valor 'login'
    // pode colocar botão pro unset tbm!
    // não aconteceu nada porque não colocou uma condição que redireciona para outra página

?>