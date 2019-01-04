<?php 
        include('includes/partes/cabecera.php');

        include('includes/funciones/conect.php');

        $sql_all="SELECT * FROM info_animal as A INNER JOIN usuario_dar_adopcion as B on A.id_usuarios=B.id_usuario WHERE tipo_animal='gato'";

        $query_all=mysqli_query($conexion,$sql_all);
?>      <div class="container text-center mb-4">
            <h2>Todos los animalitos!!</h2>
        </div>
        <div class="container estilos_card flex-wrap justify-content-around">
<?php  
    while($fila_animal=$query_all->fetch_assoc()){ ?>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="<?php echo $fila_animal['foto'] ?>" alt="Card image cap">
            <div class="card-body">
                <p><b class="d-inline-block">Nombre de usuario: </b><?php echo $fila_animal['nombre_usuario'] ?></p>
                <p><b>Nombre de animal: </b><?php echo $fila_animal['nombre_animal'] ?></p>
                <p><b>Tipo: </b><?php echo $fila_animal['tipo_animal'] ?></p>
                <p><b>Edad: </b><?php echo $fila_animal['edad_animal'] ?></p>
                <p><b>Información extra: </b><?php echo $fila_animal['otros'] ?></p>
                <p><b>Descripción: </b><?php echo $fila_animal['descripcion'] ?></p>
            </div>
        </div>
<?php
    }

?>
    </div>
<?php         include('includes/partes/pie.php'); ?>