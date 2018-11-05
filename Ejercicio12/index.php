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
            $tamVec = 4;
            for($i = 0; $i < $tamVec; $i++){
                $vector[$i] = rand(0, 100);
            }
            echo 'Vector sin ordenar:<br>';
            print_r($vector);
            echo '<br><br> Vector ordenado:<br>';
            print_r(ordenar($vector))
        ?>
    </body>
</html>
