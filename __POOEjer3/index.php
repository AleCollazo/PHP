<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class TicketMachine{
            private $precio;
            private $balance;
            private $total;
            
            public function __construct($coste) {
                $this->precio = $coste;
                $this->balance = 0;
                $this->total = 0;
            }
            
            public function getPrecio(){
                return $this->precio;
            }
            
            public function getBalance(){
                return $this->balance;
            }
            
            public function insertaMonedas($monedas){
                
            }
            
            public function imprimeTicket(){
                
            }
            
            public function balanceCero(){
                $this->balance = 0;
            }
        }
        ?>
    </body>
</html>
