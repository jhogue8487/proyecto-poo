<?php namespace Controllers;

    use Models\Estudiante as Estudiante;
    use Models\Seccion as Seccion;//utilizado para cargar el select de secciones con el metodo adicionar.

    class estudiantesController{
        
        private $estudiante;

        public function __construct(){
            $this->estudiante = new Estudiante();
            $this->seccion = new Seccion();
        }

        public function index(){
            $datos = $this->estudiante->list();
            return $datos;
        }

        public function adicionar(){
            
            if(!empty($_POST)){
                //var_dump(empty($_POST));
                //echo "<br>Devuelve bool(false) La variable post ya esta definida con un valor; como id_seccion: " . $_POST["id_seccion"] . " <---";
                //llena datos del select de las secciones a selecionar.
                //$datos=$this->seccion->list();//estas dos lineas deshabilitadas para que ejecute las lineas siguientes.
                //return $datos;
                $permitidos =array("image/jpeg","image/png","image/gif","image/jpg");
                $limite =700;
                if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite*1024){
                    $nomimagen = basename(date('is') . $_FILES['imagen']['name']);
                    
                    $ruta = "Views" .DS. "template".DS. "imagenes" .DS. "avatars/" .$nomimagen;
                    
                    $nombre_temporal=$_FILES['imagen']['tmp_name'];
                    move_uploaded_file ( $nombre_temporal, $ruta);

                    $this->estudiante->set("nombres", $_POST["nombres"]);
                    $this->estudiante->set("apellidos", $_POST["apellidos"]);
                    $this->estudiante->set("edad", $_POST["edad"]);
                    $this->estudiante->set("promedio", $_POST["promedio"]);
                    $this->estudiante->set("id_seccion", $_POST["id_seccion"]);
                    $this->estudiante->set("imagen", $nomimagen);
                    $this->estudiante->add();
                    header("Location:" .URL. "estudiantes");
                }

            }
            else{
                //var_dump(empty($_POST));
                //echo "<br>Devuelve bool(true), porque la variable post no definida o es null, o vacia: " . $_POST["id_seccion"] . " <---";
                $datos=$this->seccion->list();
                return $datos;
            }
        }

        public function editar($id){ 
            if(!$_POST){
                $this->estudiante->set("id", $id);
                $datos=$this->estudiante->view();
                return $datos;
            }else{
                $this->estudiante->set("id", $_POST["id"]);
                $this->estudiante->set("nombres", $_POST["nombres"]);
                $this->estudiante->set("apellidos", $_POST["apellidos"]);
                $this->estudiante->set("edad", $_POST["edad"]);
                $this->estudiante->set("promedio", $_POST["promedio"]);
                $this->estudiante->set("id_seccion", $_POST["id_seccion"]);
                $this->estudiante->edit();
                header("Location:" .URL. "estudiantes");
            }
            
        
        }

        public function listarSecciones(){
            $datos=$this->seccion->list();
            return $datos;
        }

        public function ver($id){
            $this->estudiante->set("id", $id);
            $datos=$this->estudiante->view();
            return $datos;
        }

        public function eliminar($id){
            $this->estudiante->set("id", $id);
            $this->estudiante->delete();
            header("Location:" .URL. "estudiantes");
        }
    }

    //instanciamos para llenar el selec de seccines en editar estudiantes.
    $estudiante=new estudiantesController();

?>