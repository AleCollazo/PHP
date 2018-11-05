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
    <a name="inicio"></a>
    </head>
    <body>
        <h2 id="titulo">El blog de Alex</h2>
        <form>
            <ul>
                <li><a class="lista" href="index.php#inicio">Inicio</a></li>
                <li><a class="lista" href="entradasAntiguas.php#entradasAntiguas">Entradas antiguas</a></li>
                <li><a class="lista" href="Contacto.php#contacto">Contacto</a></li>
            </ul>
            
            <div id="ultEntrada">
                <h2 id="titEntrada"></h2>
                <p id="texto"></p>
                <a id="aComentarios" href="">Comentarios</a>
            </div>
            
            <div id="comentario">
                <p>Deja tu comentario:</p>
                <p>Nombre: <input type="text"></p>
                <p>Comentario: <textarea cols="50" rows="7"></textarea></p>
                <button type="submit">Añadir Comentario</button>
            </div>
        </form>
        
        <p id="c">Copyright Alex @2018 Vigo</p>
        <?php
            $dbc = mysqli_connect('localhost', 'root');
            mysqli_select_db($dbc, 'myblog'); //Llamar a la base de datos myblog
            
            $query = ''; // Definir la consulta
        ?>
    </body>
</html>
