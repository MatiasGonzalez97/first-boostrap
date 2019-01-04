<?php     include('includes/partes/cabecera.php'); ?>
<?php 
        $correo_user=$_SESSION['correo'];
?>
<div class="container text-center">
                <h2>Datos del otro animal!</h2>
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
                    <input type="hidden" value="<?php echo $correo_user ?>" name="correo_usuario">
                    <input type="submit" name="submit" class="btn btn-outline-primary naranja" value="Agregar">
                </form>
            </div>
<?php     include('includes/partes/cabecera.php'); ?>