<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function contiene($nombres, $letra){
    $letra = strtoupper($letra);
    $cont = 0;
    for($i = 0; $i < count($nombres); $i++){
        $nombre = strtoupper($nombres[$i]);
        for($j = 0; $j < strlen($nombre); $j++){
            if(substr($nombre, $j, 1) == $letra){
                echo sprintf("%s contiene la letra %s<br>",$nombres[$i], $letra);
                $cont++;
                break;
            }
        }
    }
    return $cont;
}