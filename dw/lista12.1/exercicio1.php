<!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>Exercício 1</title>
 </head>
 <body>
     <?php
         $num1 = 5;
         $num2 = 9;

         if ($num1 > $num2) {
             echo "O valor " . $num1 . " é maior.";
         } elseif ($num2 > $num1) {
             echo "O valor " . $num2 . " é maior.";
         } else {
             echo "Os valores são iguais.";
         }
     ?>
 </body>
 </html>