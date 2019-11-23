<?php namespace view;
$template= new template();
class template{
    //metodo
    public function __construct()
    {
    ?>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> admin php poo </title>
    <link rel="stylesheet" href="<?php echo URL; ?>view/template/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo URL; ?>view/template/css/custom.css">
<!-- ==============================================================================================-->
    <nav class="navbar navbar-default ">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php URL ?>">PHP 7 POO</a>
            </div>
<!-- ==============================================================================================-->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="nav navbar-nav dropdown" role="menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                            <li class=""><a href="<?php echo URL; ?>secciones/agregar"><i class='glyphicon glyphicon-plus'></i> Agregar Secciones</a> </li>
                            <li class=""><a href="<?php echo URL; ?>secciones"><i class='glyphicon glyphicon-zoom-in'></i> Listar  Secciones</a> </li>
                        </ul>
                    </li>
                    <li class="nav navbar-nav dropdown" role="menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class=""><a href="<?php echo URL; ?>estudiantes/agregar"><i class='glyphicon glyphicon-plus'></i> Agregar Estudiante</a> </li>
                            <li class=""><a href="<?php echo URL; ?>estudiantes"><i class='glyphicon glyphicon-zoom-in'></i> Listar Estudiantes</a> </li>
                        </ul>
                    </li>
                </ul>
<!--=========================================================================================-->                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<!--=========================================================================================-->
    <?php    
    }
    public function __destruct()
    {
    ?>
    <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
        <p class="navbar-text pull-left">&copy <?php echo date('Y');?> - Jorge La Massa
            <a href="<?php echo URL;?>" target="_blank" style="color: #ecf0f1">CURSO PHP POO</a>
        </p>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        </body>
    </html>
    <?php
    }
    
}

?>