<?php namespace Models;

    class Estudiante{

        private $id, $nombre, $edad, $promedio, $imagen, $fecha, $id_seccion, $conex;

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
            $sql = "SELECT t1.*,t2.seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion=t2.id";
            $datos = $this->conex->consultaRetorno($sql);
            return $datos;
        }

        public function add()
        {
            $sql = "INSERT INTO estudiantes(id, nombres, apellidos, edad, promedio, fecha, imagen, id_seccion)
                VALUES (NULL, '{$this->nombres}', '{$this->apellidos}', '{$this->edad}', '{$this->promedio}', NOW(), '{$this->imagen}', 
                '{$this->id_seccion}')";
            $this->conex->consultaSimple($sql);
        }

        public function delete(){
            $sql = "DELETE FROM estudiantes WHERE id='{$this->id}'";
            $this->conex->consultaSimple($sql);
        }

        public function edit(){
            $sql = "UPDATE estudiantes SET nombres = '{$this->nombres}', apellidos = '{$this->apellidos}', edad = '{$this->edad}', 
            promedio = '{$this->promedio}', id_seccion = '{$this->id_seccion}' WHERE id='{$this->id}'";
            $this->conex->consultaSimple($sql);
        }

        public function view(){
            $sql = "SELECT t1.*,t2.seccion FROM estudiantes t1 INNER JOIN secciones t2 ON t1.id_seccion=t2.id WHERE t1.id='{$this->id}'";
            $datos = $this->conex->consultaRetorno($sql);
            //return $datos;//como solo es una linea de datos en un arreglo para que el controller no se sature de trabajo.
            $row = mysqli_fetch_assoc($datos);
            return $row;
        }

    }

?>