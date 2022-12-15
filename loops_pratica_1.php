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
   
        $registros = [
            ['titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'],
            ['titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'],
            ['titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3']
        ];

        echo '<pre>';
        print_r($registros);
        echo '<pre/>';

         $idx = 0;
         echo 'O array possui: ' . count($registros) . ' registros';
        // while( $idx < count($registros)) {

            
         
        //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        //     echo '<hr/>';

        //     $idx++;
        // }

        // do {
            
        //     echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        //     echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

        //     echo '<hr/>';

        //     $idx++;
        // } while( $idx < count($registros));

        for($idx = 0; $idx < count($registros); $idx++){
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>';

            echo '<hr/>';
        }
            
    ?>

</body>
</html>