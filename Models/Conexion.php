<?php namespace Models;

    class Conexion{

        private $datos=array(
            "host"=>"localhost",
            "user"=>"root",
            "pass"=>"Mysql+Admin",
            "db"=>"proyecto_poo"
        );

        private $conex;

        // \mysqli, se utiliza asi porque es una clase global de php, sin esa barra se el sistema cree que es una clase creada.

        public function __construct(){
            $this-> conex = new \mysqli($this->datos['host'], $this->datos['user'],
            $this->datos['pass'], $this->datos['db']);
        }

        public function consultaSimple($sql){
            $this->conex->query($sql);
        }

        public function consultaRetorno($sql){
            $datos=$this->conex->query($sql);
            return $datos;
        }
    }

?>