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

        $parametro = 5 ;

        switch($parametro) {
            case 1 == $parametro:
                echo 'Entrou no case 1';
                break;
            case 2 == $parametro:
                echo 'Entrou no case 2';
                break;
            case 3 == $parametro:
                echo 'Entrou no case 3';
                break;
            case 4 == $parametro:
                echo 'Entrou no case 4';
                break;

                default:
                echo 'Deu em nada';
                break;
        }



    ?>
</body>
</html>