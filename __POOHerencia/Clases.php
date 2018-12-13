<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Vehiculo{
    private $color;
    private $peso;
    
    
    public function __construct($color, $peso) {
        $this->color = $color;
        $this->peso = $peso;
    }
    
    
    public function circular(){
        echo 'El vehículo circula<br>';
    }
    
    public function añadir_persona($peso_persona){
        $this->peso += $peso_persona;
    }
    
    
    public function get_color(){
        return $this->color;
    }
    
    public function set_color($color){
        $this->color = $color;
    }
    
    
    public function get_peso(){
        return $this->peso;
    }
    
    public function set_peso($peso){
        $this->peso = $peso;
    }
}



class Cuatro_ruedas extends Vehiculo{
    private $numero_puertas;
    
    
    public function repintar($color){
        parent::set_color($color);
    }
    
    
    public function get_numero_puertas(){
        return $this->numero_puertas;
    }
    
    public function set_numero_puertas($numero_puertas){
        $this->numero_puertas = $numero_puertas;
    }
}


class Dos_ruedas extends Vehiculo{
    private $cilindrada;
    
    
    public function poner_gasolina($litros){
        
    }
    
    
    public function set_cilindrada(){
        return $this->cilindrada;
    }
    
    public function get_cilindrada($cilindrada){
        $this->cilindrada = $cilindrada;
    }
}


class Coche extends Cuatro_ruedas{
    private $numero_cadenas_nieve;
    
    
    public function añadir_cadenas_nieve($num){
        
    }
    public function quitar_cadenas_nieve($num){
        
    }
    
    public function set_numero_cadenas_nieve(){
        return $this->numero_cadenas_nieve;
    }
    
    public function get_numero_cadenas_nieve($numero_cadenas_nieve){
        $this->numero_cadenas_nieve = $numero_cadenas_nieve;
    }
}


class Camion extends Cuatro_ruedas{
    private $longitud;
    
    
    public function añadir_remolque($longitud_remolque){
        
    }
    
    public function get_longitud(){
        return $this->longitud;
    }
    
    public function set_longitud($longitud){
        $this->longitud = $longitud;
    }
}