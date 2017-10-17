<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            height: 500px;
            display: block;
        }

        .shade {
            width: 100px;
            height: 100px;
            display: inline-block;
            
        }

    </style>
</head>

<body>

</body>

</html>

<?php

function fiftyShades(){
    echo "<div class='container'>";
    $a = 100;
    $color = 0;
    for ($i = 1; $i <= 50; $i++){
        $a = $a - 2;
        $color = $color + 5;
        echo "<div class='shade' style='background-color: rgba(". $color.",". $color .",". $color. "," . $a. ");'></div>";        
        
        /*
        echo "<div class='shade' style='background-color: rgb(". ($i + $change) .", " . ($i + $change). ", ".($i + $change) . " );'></div>";
        */
    }

    echo "</div>";
}

fiftyShades();

?>
