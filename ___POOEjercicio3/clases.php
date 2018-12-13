<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Productos{
    private $nombre;
    private $precio;
    
    function getNombre() {
        return $this->nombre;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }
    
    function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

}


class Perecedero extends Productos{
    private $diasCaducar;
}


class NoPerecedero extends Productos{
    private $tipo;
}