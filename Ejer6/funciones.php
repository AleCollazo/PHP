<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function isPrimo($num){
    for($i = 2; $i < $num; $i++){
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}