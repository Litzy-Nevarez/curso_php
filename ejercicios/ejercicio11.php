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

    class trabajador extends persona{
        public $puesto;

        public function presentarComoTrabajador(){
            echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
        }
    }

    $objetoTrabajador = new trabajador();//Instancia o creacion de un objeto
    $objetoTrabajador->asignarNombre("Litzy");
    $objetoTrabajador->puesto="Profesor";
    $objetoTrabajador->presentarComoTrabajador();

    
    
?>