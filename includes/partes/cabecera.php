<?php 
    if(isset($_SESSION['id_usuario'])){
    
    }else{
        session_start();
    }
    $archivo=basename($_SERVER['PHP_SELF']);
    $pagina =str_replace('.php',"",$archivo);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <script src="js/jquery-3.3.1.min.js"></script>
        <title>Adoptame</title>
    </head>
<body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <a class="navbar-brand" href="#!" >Adoptame</a> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-md-0 text-center">
                            <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#!">Contacto</a>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        href="#!" role="button" aria-haspopup="true" aria-expanded="false">
                                        Para adoptar</a>
                                    <div class="dropdown-menu">
                                        <a href="all_animals.php" class="dropdown-item">Todos</a>
                                        <a class="dropdown-item" href="all_cats.php">Gatos</a>
                                        <a class="dropdown-item" href="all_dogs.php">Perros</a>
                                    </div>
                            </li> 
<?php           if(!isset($_SESSION['id_usuario'])){ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="daradopcion.php">Para dar en adopción</a>
                            </li>      
                          
<?php                                          
                                        }else{  
?>
                            
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                        href="#!" role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $_SESSION['nombre']; ?></a>
                                    <div class="dropdown-menu">
                                        
                                        <a class="dropdown-item" href="perfilusuario.php">Ver mi perfil</a>
                                        <a class="dropdown-item" href="includes/funciones/close.php">Cerrar sesión</a>
                                        
                                    </div>
                            </li>
<?php                                   
                                        }
?>
                            
                    </ul>
                </div>
            </nav>
        </div>
       
<?php   if($pagina=='index'){ ?>
    <section class="bienvenidos">
        <div class="container">

            <div class="texto-bienvenido text-center">
                    <p class="h4">Bienvenidos!</p>
                    <h1 class="display-4 mb-5">Encantado de conocerte</h1>
                    <a href="" class="btn btn-primary btn-lg">Ponte en contacto</a>
            </div>

        </div>
    </section>
<?php  }else{ ?>
    <div class="container">
        <section class="banner-logo">
            <h2></h2>
        </section>
    </div>
<?php  } ?>
