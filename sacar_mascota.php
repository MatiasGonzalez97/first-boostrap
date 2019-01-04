<?php 
    session_start();
    $id=$_POST['id_user'];
    $id_mascota=$_POST['id_animal'];
   
    $sql_sacar="DELETE FROM `info_animal` WHERE id_usuarios=$id AND id_animal=$id_mascota";
    include_once('includes/funciones/conect.php');
    mysqli_query($conexion,$sql_sacar);
    header('Location:perfilusuario.php');
?>