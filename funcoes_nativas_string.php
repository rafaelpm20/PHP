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

        $texto = "Curso Completo de PHP";

        echo '<hr/>';
        //string to upper
        echo strtoupper($texto);
        echo $texto . '<br/>';

        echo '<hr/>';
        //tring to lower
        echo $texto . '<br/>';
        echo strtolower($texto);

        echo '<hr/>';
        //upper case first
        echo $texto . '<br/>';
        echo ucfirst($texto);

        echo '<hr/>';
        //string lenght
        echo $texto . '<br/>';
        echo strlen($texto);

        echo '<hr/>';
        //string replace    
        echo $texto . '<br/>';
        echo str_replace('PHP', 'Javascript', $texto);

        echo '<hr/>';
        //string substr
        echo $texto . '<br/>';
        echo substr($texto,0, 14) . '...';


      
    
    ?>
</body>
</html>