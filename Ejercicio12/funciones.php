<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ordenar($vector){
    $aux = 0;
    //$vectorOrd;
    for($i = 1; $i < count($vector); $i++){
        for($j = $i; $j > 0; $j--){
            if($vector[$i] < $vector[$i - $j]){
                $aux = $vector[$i];
                $vector[$i] = $vector[$i - $j];
                $vector[$i - $j] = $aux;
            }
        }
    }
    return $vector;
}