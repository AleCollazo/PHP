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
            const MAX_LIBROS = 3;
            private static $numLibros ;
            private static $genRef = 100;
            private $autor;
            private $titulo;
            private $paginas;
            private $refLibro;
            private $prestado;
            private $contieneCD;
            
            public function __construct($autor, $titulo, $paginas) {
                if(self::$numLibros < self::MAX_LIBROS){
                    self::$genRef++;
                    self::$numLibros++;
                    $this->refLibro = self::$genRef;
                    $this->contieneCD = FALSE;
                    $this->prestado = 0;
                    $this->autor = $autor;
                    $this->titulo = $titulo;
                    $this->paginas = $paginas;
                }
                else{
                    throw Exception::class;
                }
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
            
//            public function setRefLibro($refLibro){
//                if(strlen($refLibro > 3)){
//                    $this->refLibro = $refLibro;
//                }
//                else{
//                    echo 'ERROR. La referencia tiene que tener una longtud mayor de 3 carácteres';
//                }
//            }
            
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
                if (strlen((string)$this->refLibro) >= 3){
                    echo 'Referencia del libro '.$this->refLibro.'</br>';
                }
                else{
                    echo 'Referencia no válida</p>';
                }
                echo 'Veces prestado '.$this->prestado.'</br>';
                echo '<br>';
            }
            
            public function selector(){
                $this->contieneCD = true;
            }
        
        }
        ?>
        
        <?php 
        $libro1 = new Libro("autor1","titulo1",20);
        $libro1->printLibro();
        
        $libro2 = new Libro("autor2","titulo2",30);
        $libro2->printLibro();
        
        $libro3 = new Libro("autor3","titulo3",120);
        $libro3 ->setPrestado();
        $libro3->printLibro();
        
        $libro4 = new Libro("autor4","titulo4",120);
        $libro4->printLibro();
        
        ?>
    </body>
</html>
