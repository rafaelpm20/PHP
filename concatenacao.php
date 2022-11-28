<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - concatenação</title>
</head>
<body>

<?php

    $nome = 'Rafael';
    $cor = 'preto';
    $idade = '26';
    $atividade_preferida = 'nadar';

    //operador . 

    echo 'Olá ' . $nome . ', vi que sua cor preferida é '. $cor .', estou vendo também que você possui '. $idade .' anos e que gosta de '.$atividade_preferida.'';

    echo '<br/>';

    echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida"
?>


</body>
</html>