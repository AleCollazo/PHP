<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function didujarCuadrado($n){
    for($i = 1; $i <= $n; $i++){
        for($j = 1; $j <= $n; $j++){
            if($i == 1 || $i == $n){
                echo '*';
            }
            else{
                if($j == 1 || $j == $n){
                    echo '*';
                }
                else{
                    echo '&nbsp&nbsp';
                }
            }
        }
        echo '<br>';
    }
}