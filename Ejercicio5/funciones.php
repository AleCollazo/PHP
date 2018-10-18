<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function binario($num){
    if($num == 0){
        return "0";
    }
    if($num > 0 && $num <= 255){
        $cont = 0;
        $res = "";
        for($i = $num; $i >= 1; $i/=2){
            $bin[$cont] = $i%2;
             $cont++;
        }
        
        for($i = $cont - 1; $i >= 0; $i--){
            $res = sprintf($res."%d",$bin[$i]);
        }
    return $res;
    }
    else{
        return 'Número no válido, tiene que ser entre 0 y 255';
    }
}