<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Empleado{
            const PLUS = 300;
            private $nombre;
            private $edad;
            private $salario;
            
            public function __construct($nombre, $edad, $saliro){
                $this->nombre = $nombre;
                $this->edad = $edad;
                $this->salario = $saliro;
            }
            
            public function getNombre() {
                return $this->nombre;
            }

            public function getEdad() {
                return $this->edad;
            }

            public function getSalario() {
                return $this->salario;
            }

            public function setNombre($nombre) {
                $this->nombre = $nombre;
            }

            public function setEdad($edad) {
                $this->edad = $edad;
            }

            public function setSalario($salario) {
                $this->salario = $salario;
            }
            
            abstract function plus();
        }
        
        class Comercial extends Empleado{
            private $comision;
            
            public function __construct($nombre, $edad, $saliro, $comision) {
                parent::__construct($nombre, $edad, $saliro);
                $this->comision = $comision;
            }
            
            public function getComision() {
                return $this->comision;
            }

            public function setComision($comision) {
                $this->comision = $comision;
            }
            
            public function plus(){
                if(parent::getEdad() > 30 && $this->comision > 200){
                    parent::setSalario(parent::getSalario() + parent::PLUS);
                    return "true";
                }
                return "false";
            }
        }
        
        class Repartidor extends Empleado{
            private $zona;
            
            public function __construct($nombre, $edad, $saliro, $zona) {
                parent::__construct($nombre, $edad, $saliro);
                $this->zona = $zona;
            }
            
            public function getZona() {
                return $this->zona;
            }

            public function setZona($zona) {
                $this->zona = $zona;
            }
            
            public function plus() {
                if(parent::getEdad() < 20 && $this->zona == "zona 3"){
                    parent::setSalario(parent::getSalario() + parent::PLUS);
                    return "true";
                }
                return "false";
            }
        }