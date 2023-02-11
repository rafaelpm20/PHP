<?php

    //tenha uma lógica
    try {
        //tenha uma lógica onde possa ocorrer um potencial erro ( exceção)
        echo '<h3> *** Try *** <h3>';

        //$sql = 'Select * from clientes';
        //mysql_query($sql);

        if(!file_exists('require_arquivo_a.php')) {
            throw new Exception('O arquivo em questão deveria estar disponível as ' .date('d/m/Y H:i:s'). ' mas não estava');
        }

    } catch (Error $e) {
        echo '<h3> *** Catch *** <h3>';
        echo '<p style="color: red">' . $e . '</p>';
        //armazenando esse erro em banco de dados
        
    } catch ( Exception $e){
        echo '<h3> *** Catch *** <h3>';
        echo '<p style="color: red">' . $e . '</p>';
        //armazenando esse erro em banco de dados
    } finally {
        echo '<h3> *** Finally *** <h3>';
    }

   