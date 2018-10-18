<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function empiezaPor($nombres, $letra){
    $letra = strtoupper($letra);
    $cont = 0;
    for($i = 0; $i < count($nombres); $i++){
        if(substr($nombres[$i], 0, 1) == $letra){
            echo sprintf("%s empieza por %s<br>",$nombres[$i], $letra);
            $cont++;
        }
    }
    return $cont;
}