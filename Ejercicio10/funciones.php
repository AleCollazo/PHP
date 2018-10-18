<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function comprobarPass($pass){
    if(is_numeric(substr($pass, 0, 1))){
        return false;
    }
    elseif (strlen($pass) < 6 || strlen($pass) > 10) {
        return false;
    }
    else{
        return true;
    }
}