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
            $nombres = array("Alex","Nati","Hector","Ana","Miguel","Naria","Albreto","Alicia");
            $letra = 'z';
            echo sprintf("%d nombres contiene la letra %s", contiene($nombres, $letra),$letra);
        ?>
    </body>
</html>
