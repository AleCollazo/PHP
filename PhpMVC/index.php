<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
if((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos'])) &&
        ($_POST['apellidos'] != '') && (isset($_POST['telefono'])) && ($_POST['telefono'] != '') &&
        (isset($_POST['departamento'])) && ($_POST['departamento'] != '')){
    
    include "modelo/modelo.php";
    $nuevo = new Empleado();
    $asd = $nuevo->setEmpleado($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['departamento']);
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
    </head>
    <body>
        <header>
            <h1>Ejemplo MVC con PHP</h1>
            <hr/>
            <p>Creamos una base de datos de los empleados de una empresa y operamos
            con ella mediante el paradigma MVC</p>
        </header>
        <?php
        // put your code here
        ?>
    </body>
</html>
