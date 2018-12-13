<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Producto{
    private $nombre;
    private $precio;
    
    
    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    
    public function calcular($cantidadProductos){
        return $this->precio * $cantidadProductos;
    }
}

class Perecedero extends Producto{
    private $caducar;
    
    
    public function __construct($nombre, $precio, $caducar) {
        parent::__construct($nombre, $precio);
        $this->caducar = $caducar;
    }
    
    
    public function getCaducar() {
        return $this->caducar;
    }

    public function setCaducar($cadDia, $cadMes, $cadAño) {
        $this->caducar = mktime(0, 0, 0, $cadMes, $cadDia, $cadAño);
    }
    
    public function calcular($cantidadProductos) {
        $num = 1;
        if((time() - $this->caducar)/86400 < 2 and (time() - $this->caducar)/86400 > 0){
            $num = 4;
        }elseif((time() - $this->caducar)/86400 < 3){
            $num = 3;
        } elseif ((time() - $this->caducar)/86400 < 4) {
            $num = 2;
        }
        
        return parent::calcular($cantidadProductos)/$num;
    }

}

class NoPerecedero extends Producto{
    private $tipo;
    
    
    public function __construct($nombre, $precio, $tipo) {
        parent::__construct($nombre, $precio);
        $this->tipo = $tipo;
    }
    
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}