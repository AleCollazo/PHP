<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicios tipo Examen</title>
        <?php include 'ejercicio1.php'; include 'ejercicio2.php';?>
    </head>
    <body>
        <?php
        // Ejercicio 1
        //$emp = new Empleado("Alex", 26, 1500);
        $com = new Comercial("Alex", 32, 1500, 300);
        $rep = new Repartidor("Pablo", 18, 1100, "zona 3");
        
        echo 'Nombre: '.$com->getNombre().'<br>';
        echo 'Edad: '.$com->getEdad().'<br>';
        echo 'Salario: '.$com->getSalario().'<br>';
        echo 'Zona: '.$com->getComision().'<br><br>';
        
        echo 'Nombre: '.$rep->getNombre().'<br>';
        echo 'Edad: '.$rep->getEdad().'<br>';
        echo 'Salario: '.$rep->getSalario().'<br>';
        echo 'Zona: '.$rep->getZona().'<br><br>';
        
        $plus = $com->plus();
        echo 'PLUS '.$plus.'<br>';
        echo 'Nombre: '.$com->getNombre().'<br>';
        echo 'Edad: '.$com->getEdad().'<br>';
        echo 'Salario: '.$com->getSalario().'<br>';
        echo 'Comision: '.$com->getComision().'<br><br>';
        
        $plus = $rep->plus();
        echo 'PLUS '.$plus.'<br>';
        echo 'Nombre: '.$rep->getNombre().'<br>';
        echo 'Edad: '.$rep->getEdad().'<br>';
        echo 'Salario: '.$rep->getSalario().'<br>';
        echo 'Zona: '.$rep->getZona().'<br><br>';
        
        
        // Ejercicio 2
        $alm = new Almacen();
        $alm->precioTotal();
        
        $agua = new AguaMineral(2, 2, 1.5, "Mondariz", "Mondariz");
        
        $alm->agregarProducto($agua);
        ?>
    </body>
</html>
