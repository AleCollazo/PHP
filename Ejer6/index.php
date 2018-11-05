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
        <?php include 'funciones.php'; ?>
    </head>
    <body>
        <?php
            echo sprintf("%d es primo? %b<br>",$n = 3,isPrimo(3));
            echo sprintf("%d es primo? %b<br>",$n = 4,isPrimo($n));
            echo sprintf("%d es primo? %b<br>",$n = 5,isPrimo($n));
            echo sprintf("%d es primo? %b<br>",$n = 6,isPrimo($n));
            echo sprintf("%d es primo? %b<br>",$n = 7,isPrimo($n));
            echo sprintf("%d es primo? %b<br>",$n = 8,isPrimo($n));
            echo sprintf("%d es primo? %b<br>",$n = 9,isPrimo($n));
            echo sprintf("%d es primo? %b<br>",$n = 17,isPrimo($n));
        ?>
    </body>
</html>
