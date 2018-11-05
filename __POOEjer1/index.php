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
        class Libro{
            private $autor;
            private $titulo;
            private $paginas;
            private $refLibro;
            private $prestado;
            private $contieneCD;
            
            public function __construct($autor, $titulo, $paginas) {
                $this->refLibro = "";
                $this->contieneCD = FALSE;
                $this->prestado = 0;
                $this->autor = $autor;
                $this->titulo = $titulo;
                $this->paginas = $paginas;
            }


            public function getAutor(){
                return $this->autor;
            }
            
            public function  getTitulo(){
                return $this->titulo;
            }
            
            public function getPaginas(){
                return $this->paginas;
            }
            
            public function setRefLibro($refLibro){
                if(strlen($refLibro > 3)){
                    $this->refLibro = $refLibro;
                }
                else{
                    echo 'ERROR. La referencia tiene que tener una longtud mayor de 3 carácteres';
                }
            }
            
            public function setPrestado(){
                $this->prestado++;
            }
            
            public function getPrestado(){
                return $this->prestado;
            }

            public function printAutor(){
                echo 'Autor '.$this->autor.'</br>';
            }
            
            public function printTitulo(){
                echo 'Título '.$this->titulo.'</br>';
            }
            
            public function printLibro(){
                echo 'Título '.$this->titulo.'</br>';
                echo 'Autor '.$this->autor.'</br>';
                echo 'Número de páginas '.$this->paginas.'</br>';
                if (strlen($this->refLibro) > 0){
                    echo 'Referencia del libro'.$this->refLibro.'</br>';
                }
                echo 'Veces prestado '.$this->prestado.'</br>';
            }
            
            public function selector(){
                $this->contieneCD = true;
            }
        
        }
        ?>
    </body>
</html>
