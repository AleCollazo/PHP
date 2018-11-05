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
        <?php include 'funciones.php' ?>
    </head>
    <body>
        <?php
            $precio = 10.84;
            $monedas = pagoMonedas2($precio);
            echo sprintf("Pago de %.2f con monedas de:<br>"
                    . "1€: %d<br>"
                    . "50 cent: %d<br>"
                    . "20 cent: %d<br>"
                    . "10 cent: %d<br>"
                    . "5 cent: %d<br>"
                    . "1 cent: %d",
                    $precio,$monedas[0],$monedas[1],$monedas[2],$monedas[3],
                    $monedas[4],$monedas[5]);
        ?>
    </body>
</html>
