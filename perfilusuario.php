<?php     include('includes/partes/cabecera.php'); ?>
<?php 
    include_once('includes/funciones/conect.php');

    $id=$_SESSION['id_usuario'];

    $info_animal="SELECT * FROM info_animal as A INNER JOIN usuario_dar_adopcion as B 
    ON A.id_usuarios=B.id_usuario WHERE id_usuario=$id";
    $resultado_imagen=mysqli_query($conexion,$info_animal);
    
?>
    <div class="container text-center mb-4">
        <h2>Mis animales para dar en adopción</h2>
    </div>
    <div class="container text-center mb-4">
        <a href="add_confirm.php" class="btn btn-primary ">Agregar otro animal</a>
    </div>
    <div class="container estilos_card flex-wrap justify-content-around">
<?php  
    while($fila_animal=$resultado_imagen->fetch_assoc()){ ?>
        <div class="card">
            <img class="card-img-top img-thumbnail" src="<?php echo $fila_animal['foto'] ?>" alt="Card image cap">
            <div class="card-body">
                <p><b class="d-inline-block">Nombre de usuario: </b><?php echo $fila_animal['nombre_usuario'] ?></p>
                <p><b>Nombre de animal: </b><?php echo $fila_animal['nombre_animal'] ?></p>
                <p><b>Tipo: </b><?php echo $fila_animal['tipo_animal'] ?></p>
                <p><b>Edad: </b><?php echo $fila_animal['edad_animal'] ?></p>
                <p><b>Información extra: </b><?php echo $fila_animal['otros'] ?></p>
                <p><b>Descripción: </b><?php echo $fila_animal['descripcion'] ?></p>
                <form action="sacar_mascota.php" method="post" class="text-center">

                    <input type="hidden" value="<?php echo $fila_animal['id_animal']; ?>" name="id_animal">
                    <input type="hidden" value="<?php echo $fila_animal['id_usuario'] ?>" name="id_user">
                    <input type="submit" class="btn btn-danger" value="Eliminar publicación">

                </form>
            </div>
        </div>
<?php
      $_SESSION['correo']=$fila_animal['correo'];
    }

?>
    </div>
<?php     include('includes/partes/pie.php'); ?>