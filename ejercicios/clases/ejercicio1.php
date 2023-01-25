<?php
    class persona{
        public $nombre;//Propiedades
        private $edad; //se accede desde la clase que se definio
        protected $altura; //encapsulamiento, definido como solo se puede acceder mediante la misma clase y las clases heredadas


        //Acciones o metodos
        public function asignarNombre($nuevoNombre){
            $this->nombre=$nuevoNombre;
        }

        public function imprimirNombre(){
            echo "Hola soy ".$this->nombre;
        }

        public function mostrarEdad(){
            $this->edad=20;
            return $this->edad;
        }
    }

    $objetoAlumno = new persona();//Instancia o creacion de un objeto
    $objetoAlumno->asignarNombre("Litzy");

    $objetoAlumno2 = new persona();
    $objetoAlumno2->asignarNombre("Yulissa");
    $objetoAlumno2->imprimirNombre();

    echo $objetoAlumno->nombre;

    echo $objetoAlumno2->nombre;

    echo $objetoAlumno2->mostrarEdad();
    
?>