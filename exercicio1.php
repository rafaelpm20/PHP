<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <?php 
        $idade = 69;
        $peso = 50;

        if(($idade >= 16 && $idade <= 69)&& $peso >= 50) {
            echo 'Atende aos requisitos';
        } else {
            echo 'Não atende aos requisitos';
        }

        $pessoa = $idade >= 16 && $idade <= 69 && $peso >= 50 ? 'atende aos requisitos' : 'não atende aos requisitos'
    ?>

    <p>A pessoa <?=$pessoa?></p>
</body>
</html>