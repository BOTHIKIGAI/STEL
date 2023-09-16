
<?php

    class Persona {

        private $id;
        private $nombre;
        private $cedulaResidente;
        private $fechaNacimiento;
        private $celular;

        public function __construct(null $id, string $nombre, int $cedulaResidente, string $fechaNacimiento, int $celular) {

            $this -> id = $id;
            $this -> nombre = $nombre;
            $this -> cedulaResidente = $cedulaResidente;
            $this -> fechaNacimiento = $fechaNacimiento;
            $this -> celular = $celular;

        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;
                return $this;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
                return $this;
        }

        public function getCedulaResidente()
        {
                return $this->cedulaResidente;
        }

        public function setCedulaResidente($cedulaResidente)
        {
                $this->cedulaResidente = $cedulaResidente;
                return $this;
        }

        public function getFechaNacimiento()
        {
                return $this->fechaNacimiento;
        }

        public function setFechaNacimiento($fechaNacimiento)
        {
                $this->fechaNacimiento = $fechaNacimiento;
                return $this;
        }

        public function getCelular()
        {
                return $this->celular;
        }

        public function setCelular($celular)
        {
                $this->celular = $celular;
                return $this;
        }
    }

?>
