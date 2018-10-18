<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function pagoMonedas($precio){
    $pago = 0;
    
    $monedas = array_fill(0,6,0); // ind 0: 1€; ind 1: 0,50€; ind 2: 0,20€; ind 3: 0,10€; ind 4: 0,05€; ind 5: 0,01€;
    
    $vueltas = 0;
    
    while($precio != $pago){
        $vueltas ++;
        echo sprintf("vuelta %d - pago %f<br>",$vueltas, $pago);
        echo sprintf("diferencia: %f<br>",$precio - $pago);
        if($precio - $pago >= 1){
            $monedas[0]++;
            $pago++;
        }
        elseif($precio - $pago >= 0.5){
            $monedas[1]++;
            $pago += 0.5;
        }
        elseif($precio - $pago >= 0.2){
            $monedas[2]++;
            $pago += 0.2;
        }
        elseif($precio - $pago >= 0.1){
            $monedas[3]++;
            $pago += 0.1;
        }
        elseif($precio - $pago >= 0.05){
            $monedas[4]++;
            $pago += 0.05;
        }
        elseif($precio - $pago >= 0.01){
            $monedas[5]++;
            $pago += 0.01;
        }
        else{
            echo 'Precio no válido<br>';
            break;
        }
        
    }
    return $monedas;
}

function pagoMonedas2($precio){
    $cantMonedas = array_fill(0,6,0); // ind 0: 1€; ind 1: 0,50€; ind 2: 0,20€; ind 3: 0,10€; ind 4: 0,05€; ind 5: 0,01€;
    $monedas = array('1','0.5','0.2','0.1','0.05','0.009');
    
    for($i = 0; $i < count($monedas); $i++){
        $cantMonedas[$i] = floor($precio/$monedas[$i]);
        $precio -= $cantMonedas[$i]*$monedas[$i];
    }

    
    return $cantMonedas;
}
