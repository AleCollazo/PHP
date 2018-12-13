<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Clases.php';

$coche_negro = new Coche("negro", 1500);
$coche_negro->añadir_persona(70);
$coche_negro->repintar("rojo");


echo 'Color: '.$coche_negro->get_color().'<br>'.$coche_negro->get_peso().'kg<br>';
$coche_negro->circular();