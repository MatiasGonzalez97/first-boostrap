<?php include('includes/partes/cabecera.php'); ?>
    <section class="quienes-somos py-2 text-center">
        <div class="container">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="images/cat.jpg" alt="sdadas" class="circulo img-fluid mx-auto mb-2">
                                <div class="carousel-caption d-none d-md-block">
                                <h3>Ayudanos a compartir esta pagina!</h3>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="images/gatito.jpg" alt="sdadas" class="circulo img-fluid mx-auto mb-2">
                                <div class="carousel-caption d-none d-md-block">
                                <h3>Quienes somos?</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="fotos_animales/gatitochiqui.jpg" alt="sdadas" class="circulo img-fluid mx-auto mb-2">
                                <div class="carousel-caption d-none d-md-block">
                                <h3>¿Porqué adoptar es importante?</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

        </div>
    </section>
    <section class="servicios py-2 text-center">
        <div class="container">
            <h3 class="mb-3">Bases de adopción responsable</h3>
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-bug"></i>
                    <h3>¿Como adoptar?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sit vitae quasi dignissimos ut eveniet consectetur nam maxime nisi, deleniti assumenda error nobis magni odit est harum dolores aspernatur reiciendis.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-code"></i>
                    <h3>Requisitos</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sit vitae quasi dignissimos ut eveniet consectetur nam maxime nisi, deleniti assumenda error nobis magni odit est harum dolores aspernatur reiciendis.</p>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-cat"></i>
                    <h3>¿Gatos o perros?</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sit vitae quasi dignissimos ut eveniet consectetur nam maxime nisi, deleniti assumenda error nobis magni odit est harum dolores aspernatur reiciendis.</p>
                </div>
            </div>
        </div>
    </section>
<?php 

        include('includes/funciones/conect.php');

        $sql_all="SELECT * FROM info_animal as A INNER JOIN usuario_dar_adopcion as B on A.id_usuarios=B.id_usuario";

        $query_all=mysqli_query($conexion,$sql_all);
?>      
    <section class="ultimos-proyectos py-2 text-center">
        <div class="container">
            <h3 class="mb-3 titulo">Adoptame!</h3>
            <div class="row justify-content-around">
<?php          while($resultado_animal=$query_all->fetch_assoc()){ ?>
            
                <div class="col-md-3 mb-3">
                        <h3><a href="all_animals.php"><?php echo $resultado_animal['nombre_animal'] ?></a></h3>
                        <div class="imagenrect">
                            <img src="<?php echo $resultado_animal['foto'] ?>" alt="tito" class="mb-3">
                            <p><?php echo $resultado_animal['descripcion'] ?></p>
                        </div>
                </div>
<?php           } ?>                
            </div> <!--Fin row-->
        </div> <!-- fin container -->
    </section>
<?php include('includes/partes/pie.php') ?>