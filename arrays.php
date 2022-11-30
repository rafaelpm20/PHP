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

        //sequenciais (númerios)
/*
        $lista_frutas =  ['Banana', 'Maçã', 'Morango', 'Uva'];
        $lista_frutas[] = 'Abacaxi';

       
        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr/>';
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

          echo $lista_frutas[2]
        */

        //Associativos
        
        $lista_frutas = [
        'a' => 'Banana',
        'b' =>'Maçã',
        'x' => 'Morango',
        'z' => 'Uva',
        '2' => 'Abacaxi'];

        $lista_frutas['w'] = 'Abacaxi';

        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';

        echo $lista_frutas['w'];
      
    
    
    ?>
</body>
</html>