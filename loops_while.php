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

        $num = 0;
        //operadores comparação / logicos
        while($num <= 10){

            $num++;
            
            if($num ==2 || $num == 6){
                continue;
            }
            
            echo "$num <br/>";
          

            // if($num >= 20){
            //     break;
            // }
            
        }
    
    ?>
</body>
</html>