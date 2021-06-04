<?php namespace Config;

    class Enrutador{

        public $controla="";//variable para almacenar controlador

        public static function run(Request $request){
            $controla= $request->getControlador() . "Controller";
            $ruta = ROOT . "Controllers" . DS . $controla . ".php";

            $metodo=$request->getMetodo();
            $argumento=$request->getArgumento();
            
            if (is_readable($ruta)){
                require_once $ruta;
                //echo $ruta;
                $mostrar =  "Controllers\\" . $controla;
                $controlador = new $mostrar;
                if(!isset($argumento)){
                    $datos=call_user_func(array($controlador, $metodo));
                }
                else{
                    $datos=call_user_func_array(array($controlador,$metodo),$argumento);
                }
            }
            //print_r($ruta);
            //Cargar vista
            $ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
            //echo "<br>" .$ruta." <- donde esta el controlador y metodo";
            if (is_readable($ruta)){
                require_once $ruta;
            }else{
                print "No se encontro la ruta";
            }

        }
        
    }
?>