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
?>