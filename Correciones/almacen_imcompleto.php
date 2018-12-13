<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of almacen
 *
 * @author Mila
 */
class Bebida {

    //atributos
    private static $idActual = 1;
    private $id;
    private $litros;
    private $precio;
    private $marca;

    //constructor
    public function __construct($litros, $precio, $marca) {
        $this->litros = $litros;
        $this->precio = $precio;
        $this->marca = $marca;
        $this->id = self::$idActual + 1;
    }
    
 //metodos
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCantidad() {
        return litros;
    }

    public function setCantidad($litros) {
        $this->litros = $litros;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }
    
    public function visualizar(){
        print ('id: '. $this->id . '<br> litros: '. $this->litros.'<br> precio: '. $this->precio.'<br> marca: '. $this->marca .'<br>');
        
    }

}

class BebidaAzucarada extends Bebida {
//atributos
    private $porcentajeAzucar;
    private $promocion;
    
//constructor
    public function __construct($porcentajeAzucar, $promocion, $litros, $precio, $marca) {
        parent::__construct($litros, $precio, $marca); //las de la clase padre las inicializo así
        $this->porcentajeAzucar = $porcentajeAzucar;
        $this->promocion = $promocion;
    }

 //metodos
    public function getPorcentajeAzucar() {
        return porcentajeAzucar;
    }

    public function setPorcentajeAzucar($porcentaje) {
        $this->porcentajeAzucar = $porcentaje;
    }

    public function setPromocion($promo) {
        $this->promocion = $promo;
    }

    public function getPrecio() {
        if ($this->promocion) {
            return Bebida::getPrecio() * 0.9;
        } else {
            return Bebida::getPrecio();
        }
    }

    public function visualizar() {
        parent::visualizar();
         print ('porcentaje azúcar '. $this->porcentajeAzucar.'<br> promoción: '. $this->promocion .'<br>');
    }
    
}

class AguaMineral extends Bebida {

//Atributos
    private $manantial;

//Constructores
    public function __construct($manantial, $litros, $precio, $marca) {
        parent::__construct($litros, $precio, $marca);
        $this->manantial = $manantial;
    }

//Metodos
    public function getManatial() {
        return $this->manantial;
    }

    public function setManatial($manantial) {
        $this->manantial = $manantial;
    }

    public function visualizar() {
        parent::visualizar();
         print ('manatial '. $this->manantial);
    }
}

class Almacen {

    private $estanteria = [];

    public function __construct($filas, $columnas) {
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $this->estanteria[$i][$j] = new Bebida(0, 0, 0);
            }
        }
    }

    public function agregarBebida($nuevaBebida) {
        $i = 0;
        $j = 0;
        $encontrado = 0;
        while (($i < count($this->estanteria) - 1)and ( $encontrado == 0)) {
            while (($j < count($this->estanteria) - 1)and ( $encontrado == 0)) {
                if ($this->estanteria[$i][$j]->getPrecio() == 0) {
                    print('Hay sitio para la bebida');
                    $this->estanteria[$i][$j] = $nuevaBebida;
                    $encontrado = 1;
                }
                $j++;
            }
            $i++;
        }
        if ($encontrado == 0) {
            print('No hay sitio para la bebida');
        }
    }

    public function calcularPrecioBebidas() {
        $precioTotal = 0;
        for ($i = 0; $i < (count($this->estanteria) - 1); $i++) {
            for ($j = 0; $j < (count($this->estanteria) - 1); $j++) {
                if ($this->estanteria[$i][$j]->getPrecio()!= 0) {
                    print($this->estanteria[$i][$j]->getPrecio());
                    $precioTotal += $this->estanteria[$i][$j]->getPrecio(); //acumulo el precio
                }
            }
        }
        return $precioTotal;
    }

}

$almacen1 = new Almacen(5, 5);

//Declaramos unas cuantas bebidas de prueba
$agua1 = new AguaMineral("Galicia", 1.5, 3, "Sousas");

$azucarada1 = new BebidaAzucarada(5, 0, 2, 10, "CocaCola");


$almacen1->agregarBebida($agua1);
$almacen1->agregarBebida($azucarada1);

$agua1->visualizar();

$azucarada1->visualizar();

print('El precio total es '.$almacen1->calcularPrecioBebidas());
