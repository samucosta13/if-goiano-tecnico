<?php
    setcookie("cor", "blue");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<body bgcolor="<?= $_COOKIE['cor'] ?>">
</body>

</html>