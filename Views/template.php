<?php namespace Views;
    
    $template = new Template();

    class Template{
        
        public function __construct(){
            
?>
     <!DOCTYPE html>
     <html lang="es">
     <head>
        <!--
        <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <meta http-equiv="Content-Type" content="text/html">
        -->
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Administracion de Estudiantes | Programacion POO</title>
         <link rel="stylesheet" href="<?php echo URL?>Views/template/css/bootstrap.css">
         <link rel="stylesheet" href="<?php echo URL?>Views/template/css/general.css">
         <!--la hoja de estilos con el rewrite de nginx no esta cargando.-->
     </head>
     <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Administracion de Estudiantes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo URL?>estudiantes">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo URL?>estudiantes">Listar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo URL?>estudiantes/adicionar">Adicionar</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Secciones</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo URL?>secciones">Listar</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo URL?>secciones/adicionar">Adicionar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
 <?php 
        }
    
        public function __destruct(){
?>
        <footer class="jumbotron modal-footer card-footer">
            Todos los derechos reservados &copy 2021 <br>
            Jhonny Guerrero ~ @jhogue8487 | <b>Aprendiendo POO</b>
        </footer>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="<?php echo URL?>Views/template/js/bootstrap.js"></script>
	</body>
    </html>
<?php
        }
    }
    
?>