<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//TODO ver la comparación entre clases y hacer que solo se use un identificador
//producto y ver si hacer bebida abstracta

class Almacen{
    private $arrayEstanteria;
    
    public function __construct() {
        $this->arrayEstanteria = array_fill(0, 5, array_fill(0, 10, null));
        echo $this->arrayEstanteria[0][2].'<br><br>';
    }


    public function precioTotal(){
        $precioTotal = 0;
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                if($this->arrayEstanteria[$i][$j] != null){
                    $precioTotal += $this->arrayEstanteria[$i][$j]->getPrecio();
                }
            }
        }
        return $precioTotal;
    }
    
    public function precioTotalPorMarca($marca){
        $precioTotal = 0;
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                if($this->arrayEstanteria[$i][$j] != null){
                    if($this->arrayEstanteria[$i][$j]->getMarca() == $marca){
                        $precioTotal += $this->arrayEstanteria[$i][$j]->getPrecio();
                    }
                }
            }
        }
        return $precioTotal;
    }
    
    public function precioTotalPorEstanterio($estanteria){
        if($estanteria >= 0 && $estanteria < 5){
            $precioTotal = 0;
            for($i = 0; $i < 10; $i++){
                if($this->arrayEstanteria[$estanteria][$j] != null){
                    $precioTotal += $this->arrayEstanteria[$estanteria][$j]->getPrecio();
                }
            }
            return $precioTotal;
        }
        return null;
    }
    
    public function agregarProducto($producto){
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                if($this->arrayEstanteria[$i][$j] != null){
                    $this->arrayEstanteria[$i][$j] = $producto;
                    $i = 5; $j = 10;
                }
            }
        }
    }
    
    public function eliminarProductoPorID($id){
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 10; $j++){
                if($this->arrayEstanteria[$i][$j] != null){
                    if($this->arrayEstanteria[$i][$j]->getIdentificador() == $id){
                        $this->arrayEstanteria[$i][$j] = null;
                        $i = 5; $j = 10;
                    }
                }
            }
        }
    }
    
    public function mostrarInformacion(){
        for($i = 0; $i < 5; $i++){
            echo 'Estantaria '.$i.'<br>';
            for($j = 0; $j < 10; $j++){
                if($this->arrayEstanteria[$i][$j] != null){
                    echo $this->arrayEstanteria[$i][$j]->getIdentifador().'<br>';
                    echo $this->arrayEstanteria[$i][$j]->getLitros().'<br>';
                    echo $this->arrayEstanteria[$i][$j]->getPrecio().'<br>';
                    echo $this->arrayEstanteria[$i][$j]->getMarca().'<br><br>';
                }
            }
        }
    }
}

class Bebida{
    private static $ultimoId = 0;
    private $identificador;
    private $litros;
    private $precio;
    private $marca;
    
    function __construct($litros, $precio, $marca) {
        $this->identificador = self::$ultimoId + 1;
        self::$ultimoId = $this->identificador;
        $this->litros = $litros;
        $this->precio = $precio;
        $this->marca = $marca;
    }
    function getIdentificador() {
        return $this->identificador;
    }

    function getLitros() {
        return $this->litros;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getMarca() {
        return $this->marca;
    }

    function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }

    function setLitros($litros) {
        $this->litros = $litros;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }
}


class AguaMineral extends Bebida{
    private $origen;
    
    public function __construct($litros, $precio, $marca, $origen) {
        parent::__construct($litros, $precio, $marca);
        $this->origen = $origen;
    }
    
    function getOrigen() {
        return $this->origen;
    }

    function setOrigen($origen) {
        $this->origen = $origen;
    }

}

class BebidaAzucarada extends Bebida{
    private $porcentajeAzucar;
    private $promocion;
    
    public function __construct($litros, $precio, $marca, $porcentajeAzucar, $promocion) {
        parent::__construct($litros, $precio, $marca);
        $this->porcentajeAzucar = $porcentajeAzucar;
        $this->promocion = $promocion;
    }
    
    function getPorcentajeAzucar() {
        return $this->porcentajeAzucar;
    }

    function getPromocion() {
        return $this->promocion;
    }

    function setPorcentajeAzucar($porcentajeAzucar) {
        $this->porcentajeAzucar = $porcentajeAzucar;
    }

    function setPromocion($promocion) {
        $this->promocion = $promocion;
    }

}