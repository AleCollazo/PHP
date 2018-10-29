<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blog de Alex</title>
        <style type="text/css">
            @import 'css/estilo.css';
        </style>
    <a name="contacto"></a>
    </head>
    <body>
        <h2 id="titulo">El blog de Alex</h2>
        <form>
            <ul>
                <li><a class="lista" href="index.php#inicio">Inicio</a></li>
                <li><a class="lista" href="entradasAntiguas.php#entradasAntiguas">Entradas antiguas</a></li>
                <li><a class="lista" href="Contacto.php#contacto">Contacto</a></li>
            </ul>
            <div id="comentario">
                <p>Este es tu lugar para ponerte en contacto conmigo</p>
                <p>Nombre: <input type="text"></p>
                <p>Correo electrónico: <input type="text"></p>
                <p>Dime lo que quieres y me pondré en contacto contigo lo antes posible:</p>
                <textarea rows="7" cols="50"></textarea><br><br>
                <button>Escríbeme</button>
            </div>
        </form>
        
        <p id="c">Copyright Alex @2018 Vigo</p>
        <?php
        // put your code here
        ?>
    </body>
</html>
