<?php namespace Models;

    class Seccion{

        private $id,$seccion, $conex;

        public function __construct(){
            $this->conex = new Conexion();
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }

        public function list()
        {
            $sql = "SELECT * FROM secciones";
            $datos = $this->conex->consultaRetorno($sql);
            return $datos;
        }

        public function add()
        {
            $sql = "INSERT INTO secciones(id, seccion)
                VALUES (NULL, '{$this->seccion}')";
            $this->conex->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM secciones WHERE id='{$this->id}'";
            $this->conex->consultaSimple($sql);
        }

        public function edit(){
            $sql = "UPDATE secciones SET seccion = '{$this->seccion}' WHERE id='{$this->id}'";
            $this->conex->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT * FROM secciones WHERE id='{$this->id}'";
            $datos = $this->conex->consultaRetorno($sql);
            //return $datos;//como solo es una linea de datos en un arreglo para que el controller no se sature de trabajo.
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }

    }
?>