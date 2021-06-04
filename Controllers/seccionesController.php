<?php namespace Controllers;

    use Models\Seccion as Seccion;

    class seccionesController{
    
        private $seccion;

        public function __construct(){
            $this->seccion = new Seccion();
        }

        public function index(){
            $datos = $this->seccion->list();
            return $datos;
        }

        public function adicionar(){
            if(!empty($_POST)){
                //echo " La variable post existe: " . $_POST["seccion"] . " <---";
                $this->seccion->set("seccion", $_POST["seccion"]);
                $this->seccion->add();
                header("Location:" .URL. "secciones");
            }            
        }

        public function editar($id){ 
            if(!$_POST){
                $this->seccion->set("id", $id);
                $datos=$this->seccion->view();
                return $datos;
            }else{
                $this->seccion->set("id", $_POST["id"]);
                $this->seccion->set("seccion", $_POST["seccion"]);
                $this->seccion->edit();
                header("Location:" .URL. "secciones");
            }
            
        
        }
    }

?>