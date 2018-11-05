<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $sum = 0;
            $ran = rand(1, 30);
            for($i = 1; $i <= $ran; $i++){
                $sum += $i;
            } 
            echo sprintf("Sumatorio de %d es %d", $ran, $sum);
        ?>
    </body>
</html>
