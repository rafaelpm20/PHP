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

        $num = 7.5;
        echo $num . '<br/>';

        // arredonda para cima
        echo ceil($num ). '<br/>';
        

        // arredonda para baixo
        echo floor($num). '<br/>';

         // arredonda com base na fração
         echo round($num). '<br/>';

           // gerar um valor aleatoria de 0 ate randmax
           echo rand(10, 20);
           echo '<br/>'.getrandmax();

           // raiz quadrada
            echo sqrt(9);
    
    ?>
</body>
</html>