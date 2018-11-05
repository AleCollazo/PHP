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
            echo sprintf("Es válida %s: %b<br>",$pass = "Hola", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "12Maria", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "Alejandro", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "abcdef", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "abcdefg", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "abcde", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "a12a12a", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "abcdefjghi", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "abcdefjgh", comprobarPass($pass));
            echo sprintf("Es válida %s: %b<br>",$pass = "abcdefjghik", comprobarPass($pass));
        ?>
    </body>
</html>
