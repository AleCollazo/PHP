<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1 Tema 2</title>
        <?php
            include 'funciones.php';
        ?>
    </head>
    <body>
        
        <form action="funciones.php" method="post">
            Número de unidades: <input type="number" name="numero"><br>
            Precio unidad: <input type="number" name="precio"><br>
            Tipo de IVA aplicable: 
            10% <input type="radio" name="iva" value="10" checked="">
            15% <input type="radio" name="iva" value="15">
            20% <input type="radio" name="iva" value="20">
            <input type="submit" value="Calcular"><br><br>
           
        </form>
        <?php echo 'El coste total es '.resultado();?>
         
    </body>
</html>
