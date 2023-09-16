<?php

    require_once ("objetoPersona.php");

    class Residente extends Persona {

        private $tipoResidente;
        private $anden;
        private $casa;

        public function __construct(null $id, string $nombre, $cedulaResidente, string $fechaNacimiento, int $celular, int $tipoResidente = 1, int $anden, int $casa, ) {

            parent::__construct($id, $nombre, $cedulaResidente, $fechaNacimiento, $celular);

            $this -> tipoResidente = $tipoResidente;
            $this -> anden = $anden;
            $this -> casa = $casa;

        }
 
        public function getTipoResidente()
        {
                return $this->tipoResidente;
        }

        public function setTipoResidente($tipoResidente)
        {
                $this->tipoResidente = $tipoResidente;
                return $this;
        }

        public function getAnden()
        {
                return $this->anden;
        }

        public function setAnden($anden)
        {
                $this->anden = $anden;
                return $this;
        }

        
        public function getCasa()
        {
                return $this->casa;
        }

        public function setCasa($casa)
        {
                $this->casa = $casa;
                return $this;
        }


    }


?>