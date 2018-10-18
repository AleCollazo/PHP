<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function dibujarPiramide($n){
    $e = $n;
    $p = 1;
    for($i = $n; $i > 0; $i--){
        for($j = 0; $j < $e; $j++){
            echo '&nbsp&nbsp';
        }
        for($j = 0; $j < $p; $j++){
            echo '*&nbsp&nbsp';
        }
        $e --;
        $p++;
        echo '<br>';
    }
}

function dibujarPiramideHueca($n){
    $e = $n;
    $p = 1;
    for($i = $n; $i > 0; $i--){
        for($j = 0; $j < $e; $j++){
            echo '&nbsp&nbsp';
        }
        for($j = 0; $j < $p; $j++){
            if($j == 0 || $j == $p-1 || $i == 1){
                echo '*&nbsp&nbsp';
            }
            else{
                echo '&nbsp&nbsp&nbsp&nbsp';
            }
        }
        $e --;
        $p++;
        echo '<br>';
    }
}