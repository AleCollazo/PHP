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
        <?php include 'funciones.php';?>
    </head>
    <body>
        <?php
            echo 'Número 0: '.binario(0).'<br>';
            echo "Número 1: ".binario(1)."<br>";
            echo "Número 10: ".binario(10)."<br>";
            echo "Número 2: ".binario(2)."<br>";
            echo "Número 255: ".binario(255)."<br>";
            echo "Número 254: ".binario(254)."<br>";
            echo "Número 256: ".binario(256)."<br>";
            echo "Número -1: ".binario(-1)."<br>";
            echo "Número 5: ".binario(5)."<br>";
        ?>
    </body>
</html>
