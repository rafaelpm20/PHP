<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        //false (true/false) - tipo variavel boolean
        //null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        //valores null
        if(is_null($funcionario1)){
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        echo '<br/>';

        if(is_null($funcionario2)){
            echo 'Sim, a variável é null';
        } else {
            echo 'Não, a variável não é null';
        }

        echo '<br/>';
        echo '<hr/>';

        
        //valores vazios?
        if(empty($funcionario1)){
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }

        echo '<br/>';

        if(empty($funcionario2)){
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }
        
        echo '<br/>';

        if(empty($funcionario3)){
            echo 'Sim, a variável está vazia';
        } else {
            echo 'Não, a variável não está vazia';
        }

    ?>
</body>
</html>