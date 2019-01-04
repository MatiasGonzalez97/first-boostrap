<?php   
    include('includes/funciones/conect.php');
    
    $correo=filter_input(INPUT_POST,'correo',FILTER_SANITIZE_SPECIAL_CHARS);
    $pass=filter_input(INPUT_POST,'pass',FILTER_SANITIZE_SPECIAL_CHARS);

   
    $correo_sql="SELECT * FROM usuario_dar_adopcion WHERE correo='$correo'";
    $usuario_query=mysqli_query($conexion,$correo_sql);
    $resultado_username=mysqli_fetch_assoc($usuario_query);
    $verificapass=password_verify($pass,$resultado_username['clave']);
    ?>
  <?php  
        if($verificapass){
            $usuario_sql="SELECT * FROM usuario_dar_adopcion WHERE correo='$correo'";
            $resultado=mysqli_query($conexion,$usuario_sql);
            $resultado_fila=mysqli_fetch_assoc($resultado);
            $test=$resultado_fila['id_usuario'];
            
            if(mysqli_num_rows($resultado)>0){
                session_start();
                $_SESSION['id_usuario']=$test;
                $_SESSION['nombre']=$resultado_fila['nombre_usuario'];
                // echo "ha iniciado sesión";
                header('Location:index.php');
                // echo "Su id de usuario es ".$test;
            }
            else{
                echo "NO SE PUDO INICIAR SESION";
?>

            
            <a href="daradopcion.php">Volver atras</a>
<?php
            }
        }
        else{
            echo "Contraseña incorrecta";
        }
?>