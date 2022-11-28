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
 
        /*
        //recuperação da data atual / data corrente
        echo date('d/m/Y H:i');

        //timezone
        echo '<br/>';
        echo date_default_timezone_get();
        date_default_timezone_set('America/Sao_paulo');
        echo '<br/>';
        echo date('d/m/Y H:i');
        */

        $data_incial = '2022-11-28';
        $data_final = '2022-11-20';

        //timestamp
        //01/01/1970 -- 2018-04-24 (js->millissegundos / php->segundos)

        $time_incial = strtotime($data_incial);
        $time_final = strtotime($data_final);
        echo $data_incial . ' - ' . $time_incial;
        echo '<br/>';
        echo $data_final . ' - ' . $time_final;
        echo '<br/>';

        $diferenca_times = $time_incial - $time_final;
        echo '<br/>';
        echo 'A diferenca de sefundos entre a data incial e final é '.$diferenca_times;

        $segundos_existem_dia = 24 * 60 * 60;

        echo '<br/>';
        echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

        $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

        echo '<br/>';
        echo 'a diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;

    ?>
</body>
</html>