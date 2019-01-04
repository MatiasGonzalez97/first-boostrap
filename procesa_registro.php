<?php 
include('includes/partes/cabecera.php');
include('includes/funciones/conect.php');
    if(isset($_POST['submit'])){ 
        $correo=filter_input(INPUT_POST,'correo',FILTER_SANITIZE_SPECIAL_CHARS);
        $clave=password_hash(filter_input(INPUT_POST,'pass',FILTER_SANITIZE_STRING),PASSWORD_DEFAULT);
        $nombre_usuario=filter_input(INPUT_POST,'nombre_usuario',FILTER_SANITIZE_SPECIAL_CHARS);
        $documento=filter_input(INPUT_POST,'dni',FILTER_SANITIZE_SPECIAL_CHARS);

    // $registrar="INSERT INTO usuario_dar_adopcion values(null)";
        $userExist="SELECT * FROM usuario_dar_adopcion WHERE correo='$correo'";
        $resultadoUserExist=mysqli_query($conexion,$userExist);
        //Si existe un usuario con ese mail
        if( mysqli_num_rows($resultadoUserExist)>0){?>

            <div class="container">
                <p>Ups! ya existe un usuario registrado con este e-mail, pruebe con otro.</p>
                <p>¿Ha olvidado su contraseña? Reestablezcala<a href="recuperar_pass.php">aquí</a></p>       
            </div>

        <!-- Si no existe un usuario con ese mail -->
        <?php }else{ 
            $guardar_usuario="INSERT INTO usuario_dar_adopcion VALUES (null,'$correo','$clave','$nombre_usuario',$documento)";
            //Lo guardo en la base de  datos
            $verdad=mysqli_query($conexion,$guardar_usuario);
            ?>
            <div class="container text-center">
                <h2>Termine de completar su información!</h2>
                <form enctype="multipart/form-data" action="fin_registro.php" method="post">

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre(de la mascota)</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="animal" placeholder="Ej:manchitas" min="0" max="9" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Edad de la mascota</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="edad_animal" placeholder="Ej:2 meses/2 años" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Detalles especiales</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="detalles_especiales" placeholder="castrada,tiene vacunas,está desparasitada,etc" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descipción</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="descripcion_mascota" placeholder="Este es manchitas! tiene 2 meses super jugueton, tiene vacunas..." required>
                    </div>
                    <div class="form-group">
                        <label>¿Es gato o perro?</label>
                        <select class="custom-select" name="tipo">
                            <option selected>Elija el tipo de animal</option>
                            <option value="perro">Perro</option>
                            <option value="gato">Gato</option>
                        </select>
                    </div>
                    <div class="custom-file mb-3">
                        <label class="custom-file-label agrega-foto"  for="customFile">Suba una foto de la mascota</label>
                        <input type="file"  class="custom-file-input" required name="imagen" id="customFile">
                        
                    </div>
                    <input type="hidden" value="<?php echo $correo ?>" name="correo">
                    <input type="submit" name="submit" class="btn btn-outline-primary naranja" value="Completar">
                </form>
            </div>
    <?php } ?> 

<?php
    }//fin if[post[cooreo]]
    include('includes/partes/pie.php'); 
?>