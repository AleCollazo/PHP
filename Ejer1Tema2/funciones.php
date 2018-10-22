<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$flag = false;


if(!empty($_POST['numero'])){
    $numero = $_POST['numero'];
}
else{
    $numero = "";
    $flag = true;
}

if(!empty($_POST['precio'])){
    $precio = $_POST['precio'];
}
else{
    $precio = "";
    $flag = true;
}

$iva = $_POST['iva'];

$res;
if($flag){
    $res = "";
}
else{
    $res = ($precio*$numero*(1+$iva/100));
}


function resultado(){
    global $res;
    return $res;
}



  

