
<?php 
    if(isset($_POST['correo'])){
        session_start();

        if (isset($_POST['submit'])) {


            $nombre_animal=filter_input(INPUT_POST,'animal',FILTER_SANITIZE_SPECIAL_CHARS);
            $edad_animal=filter_input(INPUT_POST,'edad_animal',FILTER_SANITIZE_SPECIAL_CHARS);
            $tipo_animal=filter_input(INPUT_POST,'tipo',FILTER_SANITIZE_SPECIAL_CHARS);
            $detalles_mascota=filter_input(INPUT_POST,'detalles_especiales',FILTER_SANITIZE_SPECIAL_CHARS);
            $descrip_mascota=filter_input(INPUT_POST,'descripcion_mascota',FILTER_SANITIZE_SPECIAL_CHARS);
            $correo_user=filter_input(INPUT_POST,'correo',FILTER_SANITIZE_SPECIAL_CHARS);

            include_once('includes/funciones/conect.php');
            //extraer id_usuario

            $obtener_id_consulta="SELECT * FROM usuario_dar_adopcion WHERE correo='$correo_user'";

            $obtener_id_resultado=mysqli_query($conexion,$obtener_id_consulta);

            $fila_id=mysqli_fetch_array($obtener_id_resultado);
            $id_user=$fila_id['id_usuario'];

            $_SESSION['id_usuario']=$id_user;
            $_SESSION['nombre']=$fila_id['nombre_usuario'];
            $nombre_foto=$_FILES["imagen"]["name"];
            $ruta_foto=$_FILES["imagen"]["tmp_name"];
            $destino='fotos_animales/'.$nombre_foto;
            copy($ruta_foto,$destino);
    
            // echo "DENTRO DEL IF";
            $guardar_info_usuario="INSERT INTO info_animal VALUES (null,'$destino','$nombre_animal','$tipo_animal','$edad_animal','$detalles_mascota','$descrip_mascota','$id_user')";
            mysqli_query($conexion,$guardar_info_usuario);
            header('Location:perfilusuario.php');
        }
    }elseif(isset($_POST['correo_usuario'])){
            $nombre_animal=filter_input(INPUT_POST,'animal',FILTER_SANITIZE_SPECIAL_CHARS);
            $edad_animal=filter_input(INPUT_POST,'edad_animal',FILTER_SANITIZE_SPECIAL_CHARS);
            $tipo_animal=filter_input(INPUT_POST,'tipo',FILTER_SANITIZE_SPECIAL_CHARS);
            $detalles_mascota=filter_input(INPUT_POST,'detalles_especiales',FILTER_SANITIZE_SPECIAL_CHARS);
            $descrip_mascota=filter_input(INPUT_POST,'descripcion_mascota',FILTER_SANITIZE_SPECIAL_CHARS);
            $correo_user_agregar=filter_input(INPUT_POST,'correo_usuario',FILTER_SANITIZE_SPECIAL_CHARS);

            include_once('includes/funciones/conect.php');
            //extraer id_usuario

            $obtener_id_consulta="SELECT * FROM usuario_dar_adopcion WHERE correo='$correo_user_agregar'";

            $obtener_id_resultado=mysqli_query($conexion,$obtener_id_consulta);

            $fila_id=mysqli_fetch_array($obtener_id_resultado);
            $id_user=$fila_id['id_usuario'];

            $_SESSION['id_usuario']=$id_user;

            $nombre_foto=$_FILES["imagen"]["name"];
            $ruta_foto=$_FILES["imagen"]["tmp_name"];
            $destino='fotos_animales/'.$nombre_foto;
            copy($ruta_foto,$destino);

            // echo "DENTRO DEL IF";
            $guardar_info_usuario="INSERT INTO info_animal VALUES (null,'$destino','$nombre_animal','$tipo_animal','$edad_animal','$detalles_mascota','$descrip_mascota','$id_user')";
            mysqli_query($conexion,$guardar_info_usuario);
            header('Location:perfilusuario.php');
    }

?>
