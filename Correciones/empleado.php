<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of empleados
 *
 * @author Mila
 */
abstract class Empleado {

    const PLUS = 300;

    private $nombre;
    private $edad;
    private $salario;

//constructor

    public function __construct($nombre, $edad, $salario) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->salario = $salario;
    }

//Metodos
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function visualizar() {
        print ("Nombre= " . $this->nombre . ", edad=" . $this->edad . ", salario=" . $this->salario);
    }

    abstract function plus();
}

class Comercial extends Empleado {

//Atributos
    private $comision;

//Constructores
    public function __construct($nombre, $edad, $salario, $comision) {
        parent::__construct($nombre, $edad, $salario);
        $this->comision = $comision;
    }

//Metodos
    public function getComision() {
        return $this->comision;
    }

    public function setComision($comision) {
        $this->comision = $comision;
    }

    public function visualizar() {
        parent::visualizar();
        print('la comisión es ' . $this->comision);
    }

    /**
     * Si tiene mas de 30 años y la comision es mayor que 200, aumentamos el
     * sueldo al empleado
     * */
    public function plus() {

        if (parent::getEdad() > 30 && $this->comision > 200) {
//Con super. llamo a un metodo de la clase padre
            $nuevoSalario = parent::getSalario() + parent::PLUS;
            parent::setSalario($nuevoSalario);
            print("El empleado" . parent::getNombre() . 'tiene un plus');
            return true;
        }

        return false;
    }

}

class Repartidor extends Empleado {

    //Atributos
    private $zona;

    //Constructores
    public function __construct($nombre, $edad, $salario, $zona) {
        parent::__construct($nombre, $edad, $salario);
        $this->zona = $zona;
    }

    //Metodos
    public function getZona() {
        return $this->zona;
    }

    public function setZona($zona) {
        $this->zona = $zona;
    }

    public function visualizar() {
        parent::visualizar();
        print(" zona=" . $this->zona);
    }

    public function plus() {

        if ((parent::getEdad() < 25) && ($this->zona == "zona 3")) {
            //Con super. llamo a un metodo de la clase padre
            $nuevoSalario = parent::getSalario() + parent::PLUS;
            parent::setSalario($nuevoSalario);
            print("Se ha añadido el plus, al empleado " . parent::getNombre());
            return true;
        } else {
            print('No se ha añadido ningún plus');
        }

        return false;
    }

}

$c1 = new Comercial('Manolo', 37, 1000, 300);
$c1->visualizar();
$c1->plus();
$c1->visualizar();

$r1 = new Repartidor('Maria', 20, 222, 'zona 3');
$r1->visualizar();
$r1->plus();
$r1->visualizar();

