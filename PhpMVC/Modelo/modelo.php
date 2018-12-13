<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Empleado{
    private $empleado;
    private $db;
    
    public function __contruct(){
        $this->empleado = array();
        $this->db = new PDO('mysql:host=localhost;dbname=ejemplo_mvc',"root","");
    }
    
    public function getEmpleado(){
        $sql = "SELECT id, nombre, apellidos, departamento FROM empleados";
        foreach ($this->db->query($sql) as $res){
            $this->empleado[] = $res;
        }
        return $this->empleado;
        $this->db = null;
    }
    
    public function setEmpleado($nombre, $apellidos, $telefono, $departamento){
        $sql = "INSERT INTO empleados(nombre, apellidos, telefono, departamento) "
                . "VALUES('".$nombre . "', '" . $apellidos ."', '" . $telefono."', '" . $departamento."')";
        
        $result = $this->db->query($sql);
        
        if($result){
            return true;
        } else{
            return false;
        }
    }
}