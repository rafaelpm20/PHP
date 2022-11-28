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
    
    
     
    function valorImposto($salario) {       

        if($salario >= 1903.99 && $salario <= 2825.65) {
            $valorimposto = ($salario / 100) * 7.5;
            echo 'O valor do imposto a ser pago é ' . $valorimposto . '';
        }
         else if ($salario >= 2826.66 && $salario <= 3751.05) {
            $valorimposto = ($salario / 100) * 15;
            echo 'O valor do imposto a ser pago é ' . $valorimposto . '';
        }
         else if ($salario >= 3751.06 && $salario <= 4664.68) {
            $valorimposto = ($salario / 100) * 22.5;
            echo 'O valor do imposto a ser pago é ' . $valorimposto . '';
        }
         else if ($salario >= 4664.69) {
            $valorimposto = ($salario / 100) * 27.5;
            echo 'O valor do imposto a ser pago é ' . $valorimposto . '';
        }
         else{
            echo 'O valor do salário é isento de imposto';
         }
    }
    echo valorImposto(5000)
    ?>
</body>
</html>