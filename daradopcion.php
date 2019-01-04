<?php include('includes/partes/cabecera.php'); ?>
        <div class="container variar registrar  text-center">
            <h3>Crear cuenta</h3>
            <form action="procesa_registro.php" method="post">

                <div class="form-group">
                    <label for="formGroupExampleInput2">Correo electronico</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="correo" placeholder="Correo" required>
                </div>
                <div class="form-group">
                    <label for="contra">Contraseña</label>
                    <input type="password" class="form-control" id="contra" name="pass" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <label for="name">Nombre y apellido</label>
                    <input type="text" class="form-control" id="name" name="nombre_usuario" placeholder="ej:Alberto Flores" required>
                </div>
                <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="number" class="form-control" id="dni" name="dni" placeholder="12345678" required>
                </div>
                
                <input type="submit" class="btn btn-outline-primary naranja" name="submit" value="Registrarse">

            </form>
            <p class="font-weight-light mt-sm-2 mt-2">O si ya posee una cuenta puede <button id="login" class="btn  btn-outline-primary naranja">Iniciar sesión </button></p>
        </div>

        <div class="container iniciar ocultar text-center">
            <h3>Iniciar Sesión</h3>
                <form method="post" action="procesa_login.php">
                    <div class="form-group">
                        <label for="correo">Correo electronico</label>
                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo con el que se registro">
                    </div>
                    <div class="form-group">
                        <label for="clave">Contraseña</label>
                        <input type="password" class="form-control" id="clave" name="pass" placeholder="Contraseña">
                    </div>
                    <input type="submit" class="btn btn-outline-primary naranja mb-2" value="Iniciar sesión">
                </form>
        </div>

<?php include('includes/partes/pie.php'); ?>