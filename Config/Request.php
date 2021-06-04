<?php namespace Config;

    class Request{

        private $controlador;
        private $metodo;
        private $argumento;

        public function __construct(){
            //si existe una variable url del htaccess.
            if(isset($_GET['url'])){
                //creamos una ruta y filtramo lo recibido, viene por GET
                $ruta = filter_input(INPUT_GET, "url", FILTER_SANITIZE_URL);
                $ruta = explode("/", $ruta);//separa la cadena en subcadenas, crea el array.
                $ruta = array_filter($ruta);

                //print_r($ruta);echo "<br>";
                
                if($ruta[0] == "index.php"){
					$this->controlador = "estudiantes";
				}else{
					$this->controlador = strtolower(array_shift($ruta));
				}

                $this->metodo = strtolower(array_shift($ruta));
                
                if (!$this->metodo){
                    $this->metodo="index";
                }
                $this->argumento = $ruta;
            }
            else{
                $this->controlador="estudiantes";
                $this->metodo="index";
            }
        }

        Public function getControlador(){
            return $this->controlador;   
        }
        public function getMetodo(){
            return $this->metodo;
        }

        public function getArgumento(){
            return $this->argumento;
        }

    }

?>