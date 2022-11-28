<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - if_else</title>
</head>
<body>
    <?php
        // operadores condiciopnais/comparação
        // ==
        // ===
        // != ou <>
        // !==
        // <
        // >
        // <=
        // >=

        //operaoes lógicos
        //E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros
        //OU: || ou OR -> retorna verdadeiro se pelos menos um dos resultados forem verdadeiros
        //XOR: XOR -> retorna verdadeiro se uma das espressõe for verdadeiros
        //! -> inverte o resultado retornado pela expressão

        //f = !(f) = v
        if((22 == 22 && 33 == 33)|| 5 != 5){
            echo ' Verdadeiro';
        }else {
            echo 'Falso';
        }
    ?>
</body>
</html>