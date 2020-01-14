<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if($moclass == 9){
        foreach($all_cars as $car){
            echo($car->name);
            echo("<br>");
        }
    }
    if($moclass == 1){
        foreach($all_cars as $car){
            if($car->mark == 1){
                echo($car->name);
            echo("<br>");
            }
        }
    }
    if($moclass == 2){
        foreach($all_cars as $car){
            if($car->mark == 2){
                echo($car->name);
            echo("<br>");
            }
        }
    }
    if($moclass == 3){
        foreach($all_cars as $car){
            if($car->mark == 3){
                echo($car->name);
            echo("<br>");
            }
        }
    }


?>
</body>
</html>